@extends('layouts.app')

@section('title', 'Checkout - Ciwangun Indah Camp')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center mb-8">
                <a href="{{ route('cart.index') }}" class="text-teal-600 hover:text-teal-700 mr-2">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-3xl font-bold text-white">Checkout</h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Informasi Pribadi</h2>
                        </div>

                        <div class="p-6">
                            <form id="checkout-form" action="{{ route('checkout.process') }}" method="POST">
                                @csrf

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                                </div>

                                <div class="mb-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                                    <textarea id="address" name="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan (Opsional)</label>
                                    <textarea id="notes" name="notes" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Metode Pembayaran</h2>
                        </div>

                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input id="bank-transfer" name="payment_method" type="radio" value="bank_transfer" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300" checked>
                                    <label for="bank-transfer" class="ml-3 block text-sm font-medium text-gray-700">
                                        Transfer Bank
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="credit-card" name="payment_method" type="radio" value="credit_card" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                    <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700">
                                        Kartu Kredit
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="ewallet" name="payment_method" type="radio" value="ewallet" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                    <label for="ewallet" class="ml-3 block text-sm font-medium text-gray-700">
                                        E-Wallet
                                    </label>
                                </div>
                            </div>
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
                                <div class="flex justify-between font-bold text-lg">
                                    <span>Total</span>
                                    <span>Rp {{ number_format($cart->total, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" form="checkout-form" class="w-full bg-teal-600 text-white py-3 rounded-lg hover:bg-teal-700 transition font-semibold">
                            Bayar Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
