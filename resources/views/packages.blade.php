@extends('layouts.app')

@section('title', 'Paket Wisata - Ciwangun Indah Camp')

@section('content')
<main class="p-0 max-w-full mx-auto">
    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center overflow-hidden mb-0" id="packages-hero">
        <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80"
             alt="Paket Wisata CIC"
             class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>
        <div class="relative z-20 text-white text-center px-4 py-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Paket Wisata</h1>
            <div class="w-20 h-1 bg-green-400 mb-8 mx-auto"></div>
            <p class="text-xl max-w-3xl mx-auto">Pilih dari berbagai paket camping yang kami tawarkan untuk pengalaman liburan tak terlupakan di alam terbuka.</p>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-primary-600 uppercase">Penawaran Kami</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Paket Camping Populer</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pilih pengalaman camping terbaik kami yang dirancang untuk semua jenis petualang.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl card-hover group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1525811902-f2342640856e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Family Camp Package" class="w-full h-full object-cover transition-transform duration-500 card-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/80 via-transparent to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-secondary-500 text-white text-xs px-3 py-1 rounded-full shadow">Popular</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Paket Keluarga</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 1,200,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Cocok untuk keluarga dengan anak-anak, termasuk aktivitas ramah anak dan tenda luas.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 Hari 1 Malam</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Maks 4 orang</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Termasuk sarapan</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Package 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl card-hover group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1537905569824-f89f14cceb68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2086&q=80" alt="Adventure Package" class="w-full h-full object-cover transition-transform duration-500 card-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Paket Petualangan</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 1,500,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Untuk pencari tantangan, termasuk trekking air terjun, eksplorasi gua, dan aktivitas outdoor.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>3 Hari 2 Malam</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Maks 2 orang</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Termasuk semua makan</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl card-hover group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1506535995048-638aa1b62b77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Couple Retreat" class="w-full h-full object-cover transition-transform duration-500 card-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Paket Pasangan</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 950,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Pelarian romantis dengan tenda pribadi, pemandangan matahari terbenam, dan aktivitas khusus pasangan.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 Hari 1 Malam</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 orang</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Termasuk makan malam</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-14">
                <a href= "" class="inline-flex items-center px-8 py-3 bg-white border-2 border-primary-600 text-primary-600 font-bold rounded-full hover:bg-primary-600 hover:text-white transition duration-300 shadow-md hover:shadow-lg">
                    Lihat Semua Paket
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
