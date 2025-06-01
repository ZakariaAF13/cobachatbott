@extends('layouts.app')

@section('title', 'Fasilitas - Ciwangun Indah Camp')

@section('content')
<main class="p-0 max-w-full mx-auto">
    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center overflow-hidden mb-0" id="facilities-hero">
        <img src="https://images.pexels.com/photos/1061640/pexels-photo-1061640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="Fasilitas CIC"
             class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>
        <div class="relative z-20 text-white text-center px-4 py-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Fasilitas</h1>
            <div class="w-20 h-1 bg-green-400 mb-8 mx-auto"></div>
            <p class="text-xl max-w-3xl mx-auto">Nikmati berbagai fasilitas terbaik yang kami sediakan untuk kenyamanan dan pengalaman berkesan Anda di Ciwangun Indah Camp.</p>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-campground text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Area Camping</h3>
                    <p class="text-gray-600 text-center">Area camping luas di tengah hutan pinus yang asri dan sejuk.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-water text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Air Terjun & Sungai</h3>
                    <p class="text-gray-600 text-center">Akses ke air terjun alami dan sungai jernih untuk bermain air.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-hiking text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Jalur Hiking</h3>
                    <p class="text-gray-600 text-center">Jalur hiking menantang dengan pemandangan alam yang memukau.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-fire text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Api Unggun</h3>
                    <p class="text-gray-600 text-center">Area khusus untuk kegiatan api unggun bersama keluarga atau teman.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-utensils text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Kantin & Kafe</h3>
                    <p class="text-gray-600 text-center">Kantin dan kafe dengan menu makanan dan minuman khas lokal.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-shower text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Kamar Mandi Bersih</h3>
                    <p class="text-gray-600 text-center">Fasilitas kamar mandi dan toilet bersih serta nyaman.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
