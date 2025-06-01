@extends('layouts.app')

@section('title', 'Paket Wisata - Ciwangun Indah Camp')

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-white mb-6">Paket Wisata</h1>
        <p class="text-center text-white/80 max-w-2xl mx-auto mb-12">
            Temukan berbagai aktivitas seru yang bisa Anda lakukan di Ciwangun Indah Camp, mulai dari hiking, fotografi alam, hingga berkemah bersama keluarga.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- @foreach($packages as $package) --}}
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="overflow-hidden h-64">
                    <img src="{{ $package->image_url }}" alt="{{ $package->name }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-users mr-2"></i>
                            <span>Max. {{ $package->max_people }} Orang</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-expand mr-2"></i>
                            <span>{{ $package->area }}m²</span>
                        </div>
                    </div>

                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $package->name }}</h2>
                    <p class="text-gray-600 mb-4">{{ $package->description }}</p>

                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <span class="text-2xl font-bold text-teal-600">Rp {{ number_format($package->price, 0, ',', '.') }}</span>
                            <span class="text-gray-500 text-sm">/per malam</span>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <a href="{{ route('packages.show', $package->id) }}" class="flex-1 bg-gray-800 text-white py-2 px-4 rounded-lg text-center hover:bg-gray-700 transition">
                            Detail
                        </a>

                        @auth
                            <form action="{{ route('cart.add', $package->id) }}" method="POST" class="flex-1">
                                @csrf
                                <button type="submit" class="w-full bg-teal-600 text-white py-2 px-4 rounded-lg hover:bg-teal-700 transition">
                                    Pesan
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="flex-1 bg-teal-600 text-white py-2 px-4 rounded-lg text-center hover:bg-teal-700 transition">
                                Pesan
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
