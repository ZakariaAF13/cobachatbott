<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciwangun Indah Camp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'Montserrat', 'Quicksand', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        secondary: {
                            400: '#ffb22c',
                            500: '#eab308',
                        },
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-reverse': 'float-reverse 5s ease-in-out infinite',
                        'pulse-slow': 'pulse 5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'float-reverse': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card-hover:hover .card-image {
            transform: scale(1.05);
        }
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .chatbot {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 380px;
            height: 500px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: none;
            flex-direction: column;
            z-index: 1000;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        .chatbot.active {
            transform: translateY(0);
            opacity: 1;
        }
        .chat-toggle-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(20, 184, 102, 0.9), rgba(20, 184, 102, 0.9));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 999;
            transition: all 0.3s ease;
        }
        .chat-toggle-btn:hover {
            transform: scale(1.1);
        }
        .chatbox {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
            background: #f9f9f9;
        }
        .chat {
            display: flex;
            margin-bottom: 15px;
        }
        .chat.incoming {
            justify-content: flex-start;
        }
        .chat.outgoing {
            justify-content: flex-end;
        }
        .chat p {
            max-width: 80%;
            padding: 12px 16px;
            border-radius: 18px;
            font-size: 14px;
            line-height: 1.5;
        }
        .chat.incoming p {
            background: white;
            color: #333;
            border-top-left-radius: 0;
        }
        .chat.outgoing p {
            background: #14b876;
            color: white;
            border-bottom-right-radius: 0;
        }
        .chat-input {
            display: flex;
            padding: 15px;
            background: white;
            border-top: 1px solid #eee;
        }
        .chat-input textarea {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 10px 15px;
            outline: none;
            resize: none;
            font-size: 14px;
            max-height: 100px;
        }
        .chat-input button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #14b8a6;
            color: white;
            border: none;
            margin-left: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .chat-input button:hover {
            background: #0d9488;
        }
        /* Suggestion Buttons */
        .suggestion-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 10px 0 0 48px;
        }
        .suggestion-btn {
            background: #c6c6c6;
            color: #000000;
            border: none;
            border-radius: 16px;
            padding: 6px 16px;
            font-size: 13px;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 6px rgba(34,197,94,0.08);
        }
        .suggestion-btn:hover {
            background: #477a5a;
        }

        .gallery-slider {
            padding: 40px 0;
        }
        .gallery-slider .swiper-slide {
            height: 400px;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .gallery-slider .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-slider .swiper-slide:hover img {
            transform: scale(1.05);
        }
        .gallery-slider .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #14b8a6;
            opacity: 0.5;
        }
        .gallery-slider .swiper-pagination-bullet-active {
            opacity: 1;
            background: #14b8a6;
        }
        .gallery-slider .swiper-button-next,
        .gallery-slider .swiper-button-prev {
            color: #14b8a6;
            background: rgba(255, 255, 255, 0.8);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-slider .swiper-button-next::after,
        .gallery-slider .swiper-button-prev::after {
            font-size: 20px;
            font-weight: bold;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }
        .sidebar.active {
            right: 0;
        }
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 768px) {
            .chatbot {
                width: 90%;
                right: 5%;
                height: 70vh;
                bottom: 80px;
            }
            .gallery-slider .swiper-slide {
                height: 300px;
            }
            .sidebar {
                width: 80%;
                right: -80%;
            }
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="min-h-screen font-[Montserrat,sans-serif] text-white overflow-x-hidden bg-[linear-gradient(to_bottom,rgba(15,76,76,0)_0%,rgba(15,76,76,0.3)_30%,rgba(15,76,76,0.6)_60%,rgba(15,76,76,0.9)_100%),url('/images/p2.jpg')] bg-cover bg-center bg-no-repeat bg-fixed scroll-smooth">
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8">
                <span class="text-2xl font-bold text-primary-700">Ciwangun<span class="text-secondary-500">Indah</span>Camp</span>
                <button id="sidebarClose" class="text-gray-600 hover:text-primary-500">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <div class="space-y-6">
                <a href="{{ route('home') }}" class="block text-lg font-medium text-gray-800 hover:text-primary-600 transition">Home</a>
                 <a href="{{ route('attractions') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Atraksi Wisata</a>
                <a href="{{ route('packages') }}" class="block text-lg font-medium text-gray-800 hover:text-primary-600 transition">Packages</a>
                <a href="{{ route('facilities') }}" class="block text-lg font-medium text-gray-800 hover:text-primary-600 transition">Facilities</a>
                <a href="{{ route('gallery') }}" class="block text-lg font-medium text-gray-800 hover:text-primary-600 transition">Gallery</a>
                <a href="{{ route('contact') }}" class="block text-lg font-medium text-gray-800 hover:text-primary-600 transition">Contact</a>


            </div>
        </div>
    </div>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20">
        <div class="absolute inset-0 bg-[url('/images/p2.jpg')] bg-cover bg-center parallax -z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-transparent to-black/70 -z-10"></div>

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 rounded-full bg-primary-400/20 blur-3xl -z-10"></div>

<div class="container mx-auto px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="space-y-3 mb-6">
            <h1 class="text-3xl md:text-4xl font-bold text-white">SELAMAT DATANG DI</h1>
            <h2 class="text-4xl md:text-5xl font-bold text-secondary-400">CIWANGUN INDAH CAMP</h2>
        </div>
        <p class="text-sm md:text-base text-white/80 max-w-2xl mx-auto leading-relaxed mb-8">Nikmati Petualangan Alam Terbaik di Ciwangun Indah, Pelopor Outbound di
      Bandung dengan Pesona Hutan Pinus, Gua Eksotis, Curug yang Menyegarkan!!!
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-3">
            <a href="{{ route('packages') }}" class="px-6 py-3 text-sm md:text-base bg-gradient-to-r from-primary-700 to-primary-700 hover:from-primary-800 hover:to-primary-800 text-white font-bold rounded-full shadow-lg transition duration-300 flex items-center justify-center gap-2">
                <span>Book Now</span>
                <i class="fas fa-calendar-alt text-xs"></i>
            </a>
            <a href="{{ route('gallery') }}" class="px-6 py-3 text-sm md:text-base bg-white/20 hover:bg-white/30 text-white font-bold rounded-full border border-white/30 shadow-lg transition duration-300 flex items-center justify-center gap-2">
                <span>View Gallery</span>
                <i class="fas fa-images text-xs"></i>
            </a>
        </div>
    </div>
</div>

        <div class="absolute bottom-10 left-0 right-0 flex justify-center">
            <a href="#features" class="animate-bounce">
                <i class="fas fa-chevron-down text-white text-3xl drop-shadow"></i>
            </a>
        </div>

        <!-- Floating elements -->
        <div class="absolute top-1/4 left-1/4 w-8 h-8 rounded-full bg-secondary-400/30 animate-float"></div>
        <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-white/20 animate-float-reverse"></div>
        <div class="absolute bottom-1/4 right-1/3 w-10 h-10 rounded-full bg-secondary-400/20 animate-float"></div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-primary-600 uppercase">Why Choose Us</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Unforgettable Camping Experience</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-secondary-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition">
                        <i class="fas fa-tree text-3xl text-primary-600 group-hover:text-primary-700 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pine Forest Views</h3>
                    <p class="text-gray-600">Wake up to stunning views of lush pine forests that surround our campsite, creating a serene atmosphere.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition">
                        <i class="fas fa-water text-3xl text-primary-600 group-hover:text-primary-700 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Refreshing Waterfalls</h3>
                    <p class="text-gray-600 mb-4">Discover hidden waterfalls just a short hike from your campsite, perfect for cooling off on warm days.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition">
                        <i class="fas fa-campground text-3xl text-primary-600 group-hover:text-primary-700 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Berkemah menjadi lebih mudah dan seru!</h3>
                    <p class="text-gray-600">      Temukan berbagai aktivitas seru yang bisa Anda lakukan di Ciwangun Indah
      Camp, mulai dari hiking, fotografi alam, hingga berkemah bersama keluarga.</p>
                </div>
            </div>
        </div>
    </section>
<section class="py-16 bg-white" id="section3">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-4" data-aos="fade-up">
      Mereka Telah Berkunjung ke
      <span class="text-yellow-400">Ciwangun Indah Camp</span>
    </h2>
    <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
      Kami telah berkolaborasi dengan banyak organisasi, instansi, perusahaan,
      dan berbagai komunitas yang melakukan aktivitas alam.
    </p>

    <div class="swiper collaboration-swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper pb-10">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="https://storage.googleapis.com/a1aa/image/5cf0c4c2-416b-422b-2546-7ca058817135.jpg"
              alt="Logo Sekolah Alam Indonesia"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="/images/dsdk.jpg"
              alt="Logo Universitas Trisakti"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="https://storage.googleapis.com/a1aa/image/826eaad8-c7f9-4261-c0f0-f1fbf8f3fdad.jpg"
              alt="Logo Fitrah Islamic World Academy"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="images/gjmr.jpeg"
              alt="gjmr"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="https://storage.googleapis.com/a1aa/image/e6853117-46f7-4f85-c993-dc09d2cd309b.jpg"
              alt="Universitas Negeri Jakarta"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="swiper-slide">
          <div class="partner-logo bg-gray-50 border border-gray-200 rounded-xl p-6 h-[150px] flex items-center justify-center transition-all duration-400 hover:bg-gray-100 hover:-translate-y-1 hover:shadow-lg">
            <img
              src="images/pbrc.jpg"
              alt="Logo"
              class="max-h-[70px] max-w-full opacity-90 hover:opacity-100 transition-all duration-400"
            />
          </div>
        </div>
      </div>
      <div class="swiper-pagination mt-4 !relative !bottom-0"></div>
    </div>
  </div>
</section>
    <!-- Packages Section -->
    <section id="packages" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-primary-600 uppercase">Our Offers</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Popular Camping Packages</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose from our selection of curated camping experiences designed for all types of adventurers.</p>
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
                            <h3 class="text-2xl font-bold text-gray-900">Family Camp</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 1,200,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Perfect for families with children, includes kid-friendly activities and spacious tents.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 Days 1 Night</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Max 4 persons</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Breakfast included</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Book Now
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
                            <h3 class="text-2xl font-bold text-gray-900">Adventure Package</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 1,500,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">For thrill-seekers, includes waterfall trekking, cave exploration, and outdoor activities.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>3 Days 2 Nights</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Max 2 persons</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>All meals included</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl card-hover group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1537905569824-f89f14cceb68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2086&q=80" alt="Adventure Package" class="w-full h-full object-cover transition-transform duration-500 card-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Adventure Package</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 1,500,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">For thrill-seekers, includes waterfall trekking, cave exploration, and outdoor activities.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>3 Days 2 Nights</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Max 2 persons</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>All meals included</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Package 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl card-hover group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1506535995048-638aa1b62b77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Couple Retreat" class="w-full h-full object-cover transition-transform duration-500 card-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-bold text-gray-900">Couple Retreat</h3>
                            <span class="text-lg font-bold text-primary-600">Rp 950,000</span>
                        </div>
                        <p class="text-gray-600 mb-4">Romantic getaway with private tent, sunset views, and special couple activities.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 Days 1 Night</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>2 persons</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-primary-500 mr-2"></i>
                                <span>Dinner included</span>
                            </li>
                        </ul>
                        <a href="#" class="block w-full text-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-300 group-hover:shadow-md">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-14">
                <a href="{{ route('packages') }}" class="inline-flex items-center px-8 py-3 bg-white border-2 border-primary-600 text-primary-600 font-bold rounded-full hover:bg-primary-600 hover:text-white transition duration-300 shadow-md hover:shadow-lg">
                    View All Packages
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section with Carousel -->
    <section id="gallery" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-primary-600 uppercase">Explore Now</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Outdoor Activities</h2>
                <p class="text-gray-600 max-w-2xl mx-auto"> Berbagai kegiatan dan aktivitas Outdoor siap kami selenggarakan</p>
            </div>
          <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-green-600 text-white font-semibold shadow hover:bg-green-700 transition">Semua</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Outbound</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Camping</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Edukasi</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-semibold shadow hover:bg-green-100 transition">Alam</button>
          </div>
            <div class="gallery-slider">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1504280396767-946c960d4cc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gallery 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1537905569824-f89f14cceb68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2086&q=80" alt="Gallery 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1525811902-f2342640856e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Gallery 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1506535995048-638aa1b62b77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gallery 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gallery 5">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1500581276021-a4bbcd0050c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gallery 6">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gallery 7">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://images.unsplash.com/photo-1533873984035-25970ab07461?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" alt="Gallery 8">
                        </div>
                    </div>
                    <!-- Add pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('gallery') }}" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-800 transition">
                    View More Photos
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
<section id="features" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <img src="images/1.png" alt="Gambar 1" class="w-full h-auto rounded-lg shadow-md">
            <img src="images/2.png" alt="Gambar 2" class="w-full h-auto rounded-lg shadow-md">
            <img src="images/3.png" alt="Gambar 3" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold tracking-wider text-primary-600 uppercase">Happy Campers</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Ulasan Pengunjung</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Inilah momen seru yang dibagikan pengunjung bersama kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 testimonial-card">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-primary-100">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Our family had an amazing time at Ciwangun Indah Camp. The kids loved the outdoor activities and we appreciated the clean facilities and helpful staff. We'll definitely be back!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 testimonial-card">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-primary-100">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="David Wilson" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">David Wilson</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The adventure package was exactly what I was looking for. The waterfall trek was challenging but rewarding, and our guide was knowledgeable about the area. Great experience overall!"</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 testimonial-card">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-primary-100">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Lisa Chen" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">Lisa Chen</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"We booked the couple retreat and it was perfect! The private tent was cozy, the sunset views were breathtaking, and the staff went above and beyond to make our stay special."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-overlay">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready for Your Next Adventure?</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                Book your camping experience today and create unforgettable memories in nature.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('packages') }}" class="px-10 py-4 bg-white text-primary-700 font-bold rounded-full hover:bg-gray-100 shadow-lg transition duration-300 text-lg">
                    Book Now
                </a>
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white/10 shadow-lg transition duration-300 text-lg">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')
<!-- Chatbot -->
<div id="chatbot" class="fixed bottom-8 right-8 w-[350px] max-h-[560px] bg-[#0f7c7c] rounded-[15px] shadow-lg flex flex-col font-[Montserrat,sans-serif] text-white z-[1000] transition-all duration-300 hidden">
  <header class="flex justify-between items-center px-4 py-3 bg-[#166534] rounded-t-[15px] h-[60px]">
    <h2 class="flex items-center gap-2 m-0 text-base font-semibold">
      <div class="bg-white rounded-full p-1 flex items-center justify-center w-8 h-8 mr-2">
        <img src="/images/logo.png" alt="Chatbot Logo" class="w-6 h-6 object-contain" />
      </div>
      Ciwangun Indah Camp
    </h2>
    <span class="close-btn cursor-pointer text-xl text-black transition-all w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:rotate-90" onclick="toggleChat()">
      <i class="fas fa-times"></i>
    </span>
  </header>
  <ul id="chatbox" class="chatbox h-96 overflow-y-auto p-5 bg-[#FFF2EB]">
    <li class="chat incoming flex items-start gap-2 mb-4">
      <span class="bg-white rounded-full p-1 flex items-center justify-center">
        <img src="/images/logo.png" alt="Chatbot Logo" class="w-6 h-6 object-contain brightness-0 invert" />
      </span>
      <p class="bg-white text-[#0f4c4c] px-4 py-3 rounded-[15px] rounded-tl-none m-0 text-sm leading-relaxed max-w-[80%] shadow">
        Hi, Pengunjung<br> Apa yang akan Anda tanyakan kepada saya?
      </p>
    </li>
  </ul>
  <div class="chat-input px-4 py-3 bg-[#166534] rounded-b-[15px] flex items-center gap-2">
    <textarea id="questionInput" placeholder="Ketik pertanyaan Anda di sini..." spellcheck="false" required class="flex-1 border-none outline-none bg-white text-[#0f4c4c] px-4 py-3 rounded-full text-sm resize-none min-h-[45px] max-h-[120px] h-auto font-[Montserrat,sans-serif] overflow-y-auto placeholder-[#7f9a9a]"></textarea>
    <button id="send-btn" class="ml-1 flex items-center justify-center w-[45px] h-[45px] rounded-full bg-white/10 text-white text-2xl transition-all hover:bg-white/20 hover:scale-105" title="Send" onclick="sendQuestion()">
      <i class="fas fa-paper-plane"></i>
    </button>
  </div>
</div>

<style>
#chatbox::-webkit-scrollbar { width: 6px; }
#chatbox::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); border-radius: 3px; }
#chatbox::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 3px; }
</style>

    <!-- Toggle button -->
    <div id="chatToggleBtn" class="fixed bottom-5 right-5 z-40">
        <button onclick="toggleChat()" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
            <i class="fas fa-comments"></i> Chat
        </button>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 left-8 bg-primary-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-primary-700">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
 const collaborationSwiper = new Swiper('.collaboration-swiper', {
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    576: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 5,
    },
    1200: {
      slidesPerView: 6,
    }
  }
});
        const gallerySwiper = new Swiper('.gallery-slider .swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Back Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });


//chabot toggle
        function toggleChat() {
        const chatbot = document.getElementById('chatbot');
        const chatToggleBtn = document.getElementById('chatToggleBtn');

        if (chatbot.classList.contains('active')) {
            chatbot.classList.remove('active');
            setTimeout(() => { chatbot.style.display = 'none'; }, 300);
            chatToggleBtn.style.display = 'flex';
        } else {
            chatbot.style.display = 'flex';
            setTimeout(() => { chatbot.classList.add('active'); }, 10);
            chatToggleBtn.style.display = 'none';
        }
    }

    // Knowledge
const knowledgeBase = [
  {
    keywords: ['lokasi', 'alamat', 'dimana'],
    answer: 'CIC (Ciwangun Indah Camp) berlokasi di Jl. Kol Masturi Kp. Ciwangun, Ds. Cihanjuang Rahayu, Kecamatan Parongpong - Bandung Barat.'
  },
  {
    keywords: ['kontak', 'nomor', 'hubungi', 'telepon'],
    answer: 'Anda dapat menghubungi CIC di nomor 08119699990 atau email ke wisata.cic@gmail.com. Instagram: @ciwangunindahcamp.'
  },
  {
    keywords: ['harga tiket masuk', 'tiket masuk'],
    answer: 'Harga tiket masuk reguler CIC adalah Rp20.000/orang (usia di atas 2 tahun). Anak di bawah 2 tahun gratis. Tiket untuk wisatawan mancanegara Rp35.000.'
  },
  {
    keywords: ['parkir', 'harga parkir'],
    answer: 'Harga parkir di CIC bervariasi: motor Rp5.000, mobil Rp10.000, hiace/elf Rp25.000, medium bus Rp100.000, big bus Rp150.000. Untuk inap, harga berbeda.'
  },
  {
    keywords: ['berkemah', 'camping', 'harga berkemah'],
    answer: 'Harga berkemah 2 hari 1 malam di CIC: \n- 251-500 peserta: Rp100.000/pax\n- 101-250 peserta: Rp130.000/pax\n- 1-100 peserta: Rp150.000/pax\n- Keluarga 4-5 orang: Rp1.350.000 per paket.'
  },
  {
    keywords: ['shooting', 'prewedding', 'pertunangan', 'pernikahan'],
    answer: 'Biaya untuk kegiatan komersial seperti pertunangan, prewedding, pernikahan, atau shooting di CIC adalah Rp5.000.000 per hari.'
  },
  {
    keywords: ['outbound', 'team building'],
    answer: 'Harga paket outbound & team building full day:\n- 30-100 peserta: Rp225.000/pax (termasuk semua fasilitas)\n- Paket tanpa paintball/flying fox: Rp200.000/pax\n- Paket khusus dengan off-road: Rp585.000/pax.'
  },
  {
    keywords: ['fasilitas', 'sewa alat', 'harga fasilitas'],
    answer: 'CIC menyediakan penyewaan fasilitas seperti:\n- Saung, tenda, api unggun, sound system\n- Contoh: Saung utama Rp3.000.000, Tenda pleton Rp1.500.000, Sound mixer akustik Rp1.500.000, Api unggun Rp300.000.'
  },
  {
    keywords: ['tour guide'],
    answer: 'Tour guide di CIC dikenakan biaya Rp150.000 per 20 orang.'
  },
  {
    keywords: ['genset'],
    answer: 'Penyewaan genset 100KVA di CIC dikenakan biaya Rp4.500.000 per hari.'
  }
];


function findKnowledgeAnswer(input) {
  const text = input.toLowerCase();
  for (const item of knowledgeBase) {
    if (item.keywords.some(keyword => text.includes(keyword))) {
      return item.answer;
    }
  }
  return null;
}

async function sendQuestion() {
  const input = document.getElementById('questionInput');
  const question = input.value.trim();
  const chatbox = document.getElementById('chatbox');
  if (question === '') return;


  chatbox.appendChild(createChatLi(question, 'outgoing'));
  chatbox.scrollTop = chatbox.scrollHeight;
  input.value = '';


  const typingMsg = createChatLi('Mengetik...', 'incoming');
  typingMsg.querySelector('p').classList.add('animate-pulse');
  chatbox.appendChild(typingMsg);
  chatbox.scrollTop = chatbox.scrollHeight;

  const knowledgeAnswer = findKnowledgeAnswer(question);
  if (knowledgeAnswer) {
      setTimeout(() => {
          typingMsg.remove();
          chatbox.appendChild(createChatLi(knowledgeAnswer, 'incoming'));
          chatbox.scrollTop = chatbox.scrollHeight;
      }, 800);
      return;
  }

  try {
      const response = await fetch("/chatbot/chat", {
          method: "POST",
          headers: { "Content-Type": "application/json", 'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content },
          body: JSON.stringify({ message: question })
      });
      const data = await response.json();
      typingMsg.remove();
      const botLi = createChatLi(data.reply, 'incoming', true);
      chatbox.appendChild(botLi);
      chatbox.scrollTop = chatbox.scrollHeight;
  } catch (err) {
      typingMsg.remove();
      const botLi = createChatLi('Maaf, terjadi kesalahan. Silakan coba lagi nanti.', 'incoming', true);
      chatbox.appendChild(botLi);
      chatbox.scrollTop = chatbox.scrollHeight;
  }
}

// Suggestion
function addSuggestionButtons() {
    const chatbox = document.getElementById("chatbox");
    if (chatbox.querySelector('.suggestion-container')) return; // Only show once
    const suggestionContainer = document.createElement("div");
    suggestionContainer.className = "suggestion-container";
    const suggestions = [
        "Apa saja paket camping yang tersedia?",
        "Berapa Harga Tiket Masuk?",
        "lokasi Ciwangun Indah Camp",
    ];
    suggestions.forEach((suggestion) => {
        const button = document.createElement("button");
        button.className = "suggestion-btn";
        button.textContent = suggestion;
        button.onclick = () => {
            document.getElementById('questionInput').value = suggestion;
            sendQuestion();
            suggestionContainer.remove();
        };
        suggestionContainer.appendChild(button);
    });
    const firstMessage = chatbox.querySelector(".chat");
    if (firstMessage) {
        chatbox.insertBefore(suggestionContainer, firstMessage.nextSibling);
    }
}
function parseMarkdown(text) {
    return text.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>').replace(/\n/g, '<br>');
}
function typeWriterEffect(element, text, speed = 18, callback) {
    let i = 0;
    function type() {
        if (i <= text.length) {
            element.innerHTML = parseMarkdown(text.slice(0, i));

            element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            i++;
            setTimeout(type, speed);
        } else if (callback) {
            callback();
        }
    }
    type();
}

function createChatLi(message, className, animate = false) {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className, "flex", "items-start", "gap-2", "mb-4");
    let chatContent;
    if (className === "outgoing") {
        chatContent = `<p class=\"bg-primary-600 text-white px-4 py-3 rounded-[15px] rounded-tr-none m-0 text-sm leading-relaxed max-w-[80%] shadow\">${message}</p>`;
        chatLi.innerHTML = chatContent;
    } else {
        chatContent = `<span class=\"bg-white rounded-full p-1 flex items-center justify-center\"><img src=\"/images/logo.PNG\" alt=\"Chatbot Logo\" class=\"w-6 h-6 object-contain brightness-0 invert\" /></span><p class=\"bg-white text-[#0f4c4c] px-4 py-3 rounded-[15px] rounded-tl-none m-0 text-sm leading-relaxed max-w-[80%] shadow\"></p>`;
        chatLi.innerHTML = chatContent;
        if (animate) {
            const p = chatLi.querySelector('p');
            typeWriterEffect(p, message);
        } else {
            chatLi.querySelector('p').innerHTML = message.replace(/\n/g, '<br>');
        }
    }
    return chatLi;
}


window.addEventListener('DOMContentLoaded', () => {
    addSuggestionButtons();
});

async function sendQuestion() {
    const input = document.getElementById('questionInput');
    const question = input.value.trim();
    const chatbox = document.getElementById('chatbox');
    if (question === '') return;

    const sugg = chatbox.querySelector('.suggestion-container');
    if (sugg) sugg.remove();

    chatbox.appendChild(createChatLi(question, 'outgoing'));
    chatbox.scrollTop = chatbox.scrollHeight;
    input.value = '';

    const typingMsg = createChatLi('Mengetik...', 'incoming');
    typingMsg.querySelector('p').classList.add('animate-pulse');
    chatbox.appendChild(typingMsg);
    chatbox.scrollTop = chatbox.scrollHeight;

    const knowledgeAnswer = findKnowledgeAnswer(question);
    if (knowledgeAnswer) {
        setTimeout(() => {
            typingMsg.remove();
            const botLi = createChatLi(knowledgeAnswer, 'incoming', true);
            chatbox.appendChild(botLi);
            chatbox.scrollTop = chatbox.scrollHeight;
        }, 800);
        return;
    }

    try {
        const response = await fetch("/chatbot/chat", {
            method: "POST",
            headers: { "Content-Type": "application/json", 'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content },
            body: JSON.stringify({ message: question })
        });
        const data = await response.json();
        typingMsg.remove();
        const botLi = createChatLi(data.reply, 'incoming', true);
        chatbox.appendChild(botLi);
        chatbox.scrollTop = chatbox.scrollHeight;
    } catch (err) {
        typingMsg.remove();
        const botLi = createChatLi('Maaf, terjadi kesalahan. Silakan coba lagi nanti.', 'incoming', true);
        chatbox.appendChild(botLi);
        chatbox.scrollTop = chatbox.scrollHeight;
    }
}
    </script>
</body>
</html>
