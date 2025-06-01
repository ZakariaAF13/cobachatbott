@extends('layouts.app')

@section('title', 'Galeri - Ciwangun Indah Camp')

@section('content')
<main class="p-0 max-w-full mx-auto">
      <!-- Hero Section -->
      <section class="relative min-h-[40vh] flex items-center justify-center overflow-hidden mb-0" id="gallery-hero">
        <img src="images/p6.jpg" alt="Gallery CIC" class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>
        <div class="relative z-20 text-white text-center px-4 py-16">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">Galeri Foto</h1>
          <div class="w-20 h-1 bg-green-400 mb-8 mx-auto"></div>
          <p class="text-xl max-w-3xl mx-auto">Lihat keindahan alam dan aktivitas seru yang bisa Anda nikmati di Ciwangun Indah Camp.</p>
        </div>
      </section>
      <!-- Gallery Section -->
      <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
          <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-green-600 text-white font-semibold shadow hover:bg-green-700 transition">Semua</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Outbound</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Camping</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Edukasi</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Alam</button>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1732278/pexels-photo-1732278.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Aktivitas Outbound" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/2582818/pexels-photo-2582818.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Area Camping" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/207247/pexels-photo-207247.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Program Edukasi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1666012/pexels-photo-1666012.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Flying Fox" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1183986/pexels-photo-1183986.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Keindahan Alam" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/2252311/pexels-photo-2252311.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Peternakan Mini" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Team Building" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Pemandangan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/2496276/pexels-photo-2496276.jpeg?auto=compress&cs=tinysrgb&w=800" alt="High Rope" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1364554/pexels-photo-1364554.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Aktivitas Flying Fox" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1376201/pexels-photo-1376201.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Tenda Camping" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-md aspect-square group">
              <img src="https://images.pexels.com/photos/1687341/pexels-photo-1687341.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Pegunungan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
            </div>
          </div>
        </div>
      </section>
</main>
      @endsection
