@extends('layouts.app')

@section('title', 'Keranjang Belanja - Ciwangun Indah Camp')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-white mb-8">Keranjang Belanja</h1>

        @if($cart->items->isEmpty())
            <div class="bg-white rounded-lg p-8 text-center">
                <i class="fas fa-shopping-cart text-5xl text-gray-300 mb-4"></i>
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Keranjang Anda Kosong</h2>
                <p class="text-gray-500 mb-4">Mulai pesan paket wisata untuk mengisi keranjang</p>
                <a href="{{ route('packages.index') }}" class="inline-block bg-teal-600 text-white px-6 py-2 rounded-lg hover:bg-teal-700 transition">
                    Lihat Paket Wisata
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Item Pesanan</h2>
                        </div>

                        <div class="divide-y divide-gray-200">
                            @foreach($cart->items as $item)
                            <div class="p-6 flex flex-col md:flex-row gap-4">
                                <div class="w-full md:w-1/4">
                                    <img src="{{ $item->package->image_url }}" alt="{{ $item->package->name }}" class="w-full h-32 object-cover rounded-lg">
                                </div>

                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->package->name }}</h3>
                                    <p class="text-gray-600 text-sm mb-2">{{ $item->package->description }}</p>
                                    <p class="text-teal-600 font-bold">Rp {{ number_format($item->package->price, 0, ',', '.') }}</p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <form action="{{ route('cart.update', $item->id) }}" method="POST" class="flex items-center">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="w-16 text-center border border-gray-300 rounded px-2 py-1">
                                    </form>

                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan Pesanan</h2>

                        <div class="space-y-4 mb-6">
                            @foreach($cart->items as $item)
                            <div class="flex justify-between">
                                <span>{{ $item->package->name }} (x{{ $item->quantity }})</span>
                                <span>Rp {{ number_format($item->package->price * $item->quantity, 0, ',', '.') }}</span>
                            </div>
                            @endforeach

                            <div class="border-t border-gray-200 pt-4 mt-4">
                                <div class="flex justify-between font-bold">
                                    <span>Total</span>
                                    <span>Rp {{ number_format($cart->total, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('checkout.index') }}" class="block w-full bg-teal-600 text-white text-center py-3 rounded-lg hover:bg-teal-700 transition font-semibold">
                            Lanjut ke Pembayaran
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
