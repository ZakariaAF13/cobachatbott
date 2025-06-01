<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        try {
            $request->validate([
                'message' => 'required|string'
            ]);

            $message = $request->input('message');
            $apiKey = env('GEMINI_API_KEY');

            if (empty($apiKey)) {
                throw new \Exception('API key not configured');
            }

            // Knowledge
            $knowledgeBase = [
                [
                    'keywords' => ['lokasi', 'alamat', 'dimana'],
                    'answer' => 'CIC (Ciwangun Indah Camp) berlokasi di Jl. Kol Masturi Kp. Ciwangun, Ds. Cihanjuang Rahayu, Kecamatan Parongpong - Bandung Barat.'
                ],
                [
                    'keywords' => ['kontak', 'nomor', 'hubungi', 'telepon'],
                    'answer' => 'Anda dapat menghubungi CIC di nomor 08119699990 atau email ke wisata.cic@gmail.com. Instagram: @ciwangunindahcamp.'
                ],
                [
                    'keywords' => ['harga tiket masuk', 'tiket masuk'],
                    'answer' => 'Harga tiket masuk reguler CIC adalah Rp20.000/orang (usia di atas 2 tahun). Anak di bawah 2 tahun gratis. Tiket untuk wisatawan mancanegara Rp35.000.'
                ],
                [
                    'keywords' => ['parkir', 'harga parkir'],
                    'answer' => 'Harga parkir di CIC bervariasi: motor Rp5.000, mobil Rp10.000, hiace/elf Rp25.000, medium bus Rp100.000, big bus Rp150.000. Untuk inap, harga berbeda.'
                ],
                [
                    'keywords' => ['berkemah', 'camping', 'harga berkemah'],
                    'answer' => 'Harga berkemah 2 hari 1 malam di CIC: 251-500 peserta: Rp100.000/pax, 101-250 peserta: Rp130.000/pax, 1-100 peserta: Rp150.000/pax, Keluarga 4-5 orang: Rp1.350.000 per paket.'
                ],
                [
                    'keywords' => ['shooting', 'prewedding', 'pertunangan', 'pernikahan'],
                    'answer' => 'Biaya untuk kegiatan komersial seperti pertunangan, prewedding, pernikahan, atau shooting di CIC adalah Rp5.000.000 per hari.'
                ],
                [
                    'keywords' => ['outbound', 'team building'],
                    'answer' => 'Harga paket outbound & team building full day: 30-100 peserta: Rp225.000/pax (termasuk semua fasilitas), Paket tanpa paintball/flying fox: Rp200.000/pax, Paket khusus dengan off-road: Rp585.000/pax.'
                ],
                [
                    'keywords' => ['fasilitas', 'sewa alat', 'harga fasilitas'],
                    'answer' => 'CIC menyediakan penyewaan fasilitas seperti: Saung, tenda, api unggun, sound system. Contoh: Saung utama Rp3.000.000, Tenda pleton Rp1.500.000, Sound mixer akustik Rp1.500.000, Api unggun Rp300.000.'
                ],
                [
                    'keywords' => ['tour guide'],
                    'answer' => 'Tour guide di CIC dikenakan biaya Rp150.000 per 20 orang.'
                ],
                [
                    'keywords' => ['genset'],
                    'answer' => 'Penyewaan genset 100KVA di CIC dikenakan biaya Rp4.500.000 per hari.'
                ]
            ];

            // Cari jawaban knowledge base
            $kbAnswer = null;
            foreach ($knowledgeBase as $item) {
                foreach ($item['keywords'] as $keyword) {
                    if (stripos($message, $keyword) !== false) {
                        $kbAnswer = $item['answer'];
                        break 2;
                    }
                }
            }

            // pesan pengguna dan knowledge base untuk Gemini
            $prompt = "Anda adalah asisten Ciwangun Indah Camp (CIC), destinasi wisata alam di Bandung.
            Jawab pertanyaan berikut secara jelas, dan menggunakan Bahasa Indonesia yang baik.
            Jika pertanyaan berkaitan dengan harga, atau total biaya (misalnya jumlah orang atau paket layanan),
            gunakan data harga dari CIC dan bantu hitung totalnya secara rinci (contoh: 3 x Rp20.000 = Rp60.000).
            Jika informasi tidak cukup, sarankan untuk menghubungi kontak resmi CIC.
            Perhatikan juga huruf kapital, angka, dan tanda baca.\n";
            $knowledgeText = "\nBerikut adalah informasi referensi dari CIC:\n";
            foreach ($knowledgeBase as $item) {
                $knowledgeText .= "- " . $item['answer'] . "\n";
            }
            $prompt .= $knowledgeText;
            $prompt .= "\nPertanyaan pengguna: \n" . $message;

            $apiUrl = 'https://generativelanguage.googleapis.com/v1/models/gemini-2.0-flash:generateContent?key=' . $apiKey;

            Log::info('Mengirim request ke Gemini API', ['message' => $prompt]);

            $response = Http::timeout(30)->post($apiUrl, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);

            if ($response->failed()) {
                Log::error('Error dari Gemini API', [
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);
                throw new \Exception('Failed to get response from Gemini API');
            }

            $data = $response->json();

            if (!isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                throw new \Exception('Invalid response structure from Gemini API');
            }

            $reply = $data['candidates'][0]['content']['parts'][0]['text'];

            return response()->json([
                'reply' => $reply,
                'status' => 'success'
            ]);

        } catch (\Exception $e) {
            Log::error('Error pada ChatbotController: ' . $e->getMessage());

            return response()->json([
                'reply' => 'Maaf, terjadi kesalahan dalam memproses permintaan Anda. Silakan coba lagi nanti.',
                'error' => $e->getMessage(),
                'status' => 'error'
            ], 500);
        }
    }
}
