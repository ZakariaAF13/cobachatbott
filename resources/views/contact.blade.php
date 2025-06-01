@extends('layouts.app')

@section('title', 'Kontak - Ciwangun Indah Camp')

@section('content')
  <section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="images/p.jpg" alt="Contact CIC" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>
    <div class="relative z-10 text-white max-w-4xl mx-auto px-4">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Hubungi Kami</h1>
      <div class="w-20 h-1 bg-yellow-500 mb-8"></div>
      <p class="text-xl max-w-3xl">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut.</p>
    </div>
  </section>

  <!-- Contact Information Section -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <!-- Address -->
        <div class="bg-gray-50 p-6 rounded-lg text-center">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a4 4 0 10-5.657 5.657l4.243 4.243a8 8 0 1011.314-11.314l-4.243 4.243a4 4 0 00-5.657 5.657z" /></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-2">Alamat</h3>
          <p class="text-gray-600">Jl. Ciwangun, Kec. Parongpong<br />Kabupaten Bandung Barat<br />Jawa Barat, Indonesia</p>
        </div>
        <!-- Phone & Email -->
        <div class="bg-gray-50 p-6 rounded-lg text-center">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.3h12.2a1 1 0 00.9-1.3L17 13M7 13V6a1 1 0 011-1h5a1 1 0 011 1v7" /></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-2">Kontak</h3>
          <p class="text-gray-600 mb-2"><a href="tel:+6281234567890" class="hover:text-yellow-500">+62 812-3456-7890</a></p>
          <p class="text-gray-600"><a href="mailto:info@ciwangunindahcamp.com" class="hover:text-yellow-500">info@ciwangunindahcamp.com</a></p>
        </div>
        <!-- Operating Hours -->
        <div class="bg-gray-50 p-6 rounded-lg text-center">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-2">Jam Operasional</h3>
          <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00<br />Sabtu - Minggu: 08:00 - 18:00</p>
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Map -->
        <div>
          <h2 class="text-2xl font-bold mb-6">Lokasi Kami</h2>
          <div class="relative h-96 rounded-lg overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.654816555078!2d107.57394237430542!3d-6.816699666686192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e12cd9084bd7%3A0xb76120f15a62d2b0!2sCiwangun%20Indah%20Camp!5e0!3m2!1sen!2sid!4v1681234567890!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="CIC Location" class="absolute inset-0"></iframe>
          </div>
          <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Temukan Kami di Media Sosial</h3>
            <div class="flex space-x-4">
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="bg-gray-100 hover:bg-yellow-500 p-3 rounded-full transition-colors group">
                <svg class="text-gray-700 group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/></svg>
              </a>
              <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="bg-gray-100 hover:bg-yellow-500 p-3 rounded-full transition-colors group">
                <svg class="text-gray-700 group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.497 5.782 2.225 7.148 2.163 8.414 2.105 8.794 2.094 12 2.094m0-2.163C8.741 0 8.332.012 7.052.07 5.771.128 4.635.4 3.661 1.374c-.974.974-1.246 2.241-1.308 3.608C2.175 8.416 2.163 8.796 2.163 12s.012 3.584.07 4.85c.062 1.366.334 2.633 1.308 3.608.974.974 2.241 1.246 3.608 1.308 1.266.058 1.646.069 4.85.069s3.584-.012 4.85-.07c1.366-.062 2.633-.334 3.608-1.308.974-.974 1.246-2.241 1.308-3.608.058-1.266.069-1.646.069-4.85s-.012-3.584-.07-4.85c-.062-1.366-.334-2.633-1.308-3.608-.974-.974-2.241-1.246-3.608-1.308C15.647 2.175 15.267 2.163 12 2.163z"/><path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.324A4.162 4.162 0 1 1 16.162 12 4.162 4.162 0 0 1 12 16.162z"/><circle cx="18.406" cy="5.594" r="1.44"/></svg>
              </a>
              <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="bg-gray-100 hover:bg-yellow-500 p-3 rounded-full transition-colors group">
                <svg class="text-gray-700 group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.555-2.005.959-3.127 1.184A4.916 4.916 0 0 0 16.616 3c-2.717 0-4.924 2.206-4.924 4.924 0 .386.044.763.127 1.124C7.691 8.816 4.066 6.864 1.64 3.905c-.423.722-.666 1.561-.666 2.475 0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.212c9.057 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636A10.012 10.012 0 0 0 24 4.557z"/></svg>
              </a>
            </div>
          </div>
        </div>
        <!-- Contact Form -->
        <div>
          <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
          <form id="contactForm" class="bg-gray-50 p-6 rounded-lg">
            <div class="space-y-6">
              <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required />
              </div>
              <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required />
              </div>
              <div>
                <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek</label>
                <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required />
              </div>
              <div>
                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
              </div>
              <div>
                <button type="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-yellow-600 transition-colors flex items-center justify-center">
                  <svg class="mr-2" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 2L11 13"/><path d="M22 2L15 22L11 13L2 9L22 2Z"/></svg>
                  Kirim Pesan
                </button>
              </div>
              <div id="formSuccess" class="hidden mb-6 p-4 bg-green-50 text-green-700 rounded-lg text-center">Terima kasih! Pesan Anda telah dikirim. Kami akan menghubungi Anda segera.</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-2">Pertanyaan yang Sering Diajukan</h2>
        <p class="text-gray-600 mx-auto">Temukan jawaban untuk pertanyaan umum tentang Ciwangun Indah Camp.</p>
      </div>
      <div class="max-w-3xl mx-auto">
        <div class="mb-6 bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-semibold mb-2">Bagaimana cara reservasi di CIC?</h3>
          <p class="text-gray-600">Anda dapat melakukan reservasi melalui formulir di halaman Reservasi, menghubungi kami via telepon di +62 812-3456-7890, atau mengirim email ke reservasi@ciwangunindahcamp.com.</p>
        </div>
        <div class="mb-6 bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-semibold mb-2">Apakah ada batasan usia untuk aktivitas outbound?</h3>
          <p class="text-gray-600">Ya, beberapa aktivitas outbound memiliki batasan usia dan tinggi badan untuk alasan keselamatan. Anak-anak di bawah 12 tahun harus didampingi oleh orang dewasa.</p>
        </div>
        <div class="mb-6 bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-semibold mb-2">Apa yang harus dibawa saat berkunjung ke CIC?</h3>
          <p class="text-gray-600">Kami menyarankan untuk membawa pakaian dan sepatu yang nyaman, topi, kacamata hitam, sunscreen, obat-obatan pribadi, dan kamera untuk mengabadikan momen.</p>
        </div>
        <div class="mb-6 bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-semibold mb-2">Apakah tersedia fasilitas makan di CIC?</h3>
          <p class="text-gray-600">Ya, CIC memiliki area food court yang menyediakan berbagai pilihan makanan dan minuman. Anda juga dapat memesan paket makanan untuk grup besar.</p>
        </div>
        <div class="mb-6 bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-semibold mb-2">Bagaimana jika cuaca hujan?</h3>
          <p class="text-gray-600">CIC memiliki beberapa aktivitas indoor yang tetap dapat dinikmati saat hujan. Untuk aktivitas outdoor, kami akan menyesuaikan jadwal atau menawarkan aktivitas pengganti.</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Simple form handler for demo (no backend)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('formSuccess').classList.remove('hidden');
      setTimeout(function() {
        document.getElementById('formSuccess').classList.add('hidden');
        document.getElementById('contactForm').reset();
      }, 5000);
    });
  </script>
</body>
</html>

@endsection
