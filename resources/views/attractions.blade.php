@extends('layouts.app')

@section('title', 'Atraksi Wisata - Ciwangun Indah Camp')

@section('content')
<main class="p-0 max-w-full mx-auto">
    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center overflow-hidden mb-0" id="attractions-hero">
        <img src="https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="Atraksi Wisata CIC"
             class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>
        <div class="relative z-20 text-white text-center px-4 py-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Atraksi Wisata</h1>
            <div class="w-20 h-1 bg-green-400 mb-8 mx-auto"></div>
            <p class="text-xl max-w-3xl mx-auto">Berbagai atraksi seru dan edukatif tersedia di Ciwangun Indah Camp, mulai dari outbound, hiking, hingga wisata edukasi alam.</p>
        </div>
    </section>

    <!-- Attractions Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-tree text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Outbound & Team Building</h3>
                    <p class="text-gray-600 text-center">Kegiatan outbound seru untuk membangun kerjasama dan kekompakan tim.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-mountain text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Hiking & Trekking</h3>
                    <p class="text-gray-600 text-center">Jelajahi keindahan alam sekitar dengan jalur hiking yang menantang.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-campground text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Camping & Outing</h3>
                    <p class="text-gray-600 text-center">Pengalaman menginap di alam terbuka dengan fasilitas lengkap.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center hover:shadow-xl transition">
                    <i class="fas fa-graduation-cap text-5xl text-teal-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Wisata Edukasi</h3>
                    <p class="text-gray-600 text-center">Program edukasi alam untuk anak-anak dan pelajar.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
