{{-- resources/views/packages/show.blade.php --}}
@extends('layouts.app')

@section('title', $package->name . ' - Ciwangun Indah Camp')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Image Gallery -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="h-96 lg:h-full">
                    <img src="{{ $package->image_url }}" alt="{{ $package->name }}" class="w-full h-full object-cover">
                </div>

                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $package->name }}</h1>
                    <div class="flex items-center mb-6">
                        <span class="text-2xl font-bold text-teal-600">Rp {{ number_format($package->price) }}</span>
                        <span class="text-gray-500 ml-2">/malam</span>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi</h3>
                        <p class="text-gray-600">{{ $package->description }}</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Fasilitas</h3>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            @foreach($package->facilities as $facility)
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal-500 mr-2"></i>
                                <span>{{ $facility }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Lokasi</h3>
                        <p class="text-gray-600">{{ $package->location_description }}</p>
                    </div>

                    @auth
                    <form action="{{ route('cart.add', $package->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full bg-teal-600 text-white py-3 px-6 rounded-lg hover:bg-teal-700 transition">
                            Pesan Sekarang
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="block w-full bg-teal-600 text-white py-3 px-6 rounded-lg hover:bg-teal-700 transition text-center">
                        Login untuk Memesan
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
