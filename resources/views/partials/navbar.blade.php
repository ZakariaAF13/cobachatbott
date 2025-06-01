<nav id="main-navbar" class="navbar fixed top-0 left-0 right-0 z-50 py-4 bg-transparent/0 transition-all duration-300 border-b border-white/5">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="navbar-brand flex items-center gap-2 text-white font-bold text-sm uppercase tracking-wider">
            <img src="{{ asset('images/logo.png') }}" alt="CIC Logo" class="h-10">
            CIWANGUN INDAH CAMP
        </a>

        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="{{ route('about') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Tentang Kami</a>
            <a href="{{ route('facilities') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Fasilitas</a>
            <a href="{{ route('attractions') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Atraksi Wisata</a>
            <a href="{{ route('gallery') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Galeri</a>
            <a href="{{ route('packages') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Packages</a>
            <a href="{{ route('contact') }}" class="nav-link text-white/80 hover:text-white transition relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-teal-400 after:w-0 after:transition-all after:duration-300 hover:after:w-full">Kontak</a>
        </div>

        <div class="flex items-center gap-4">
            <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-teal-900/95 backdrop-blur-md" id="mobile-menu">
        <div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
            <a href="{{ route('home') }}" class="nav-link text-white/80 hover:text-white transition">Home</a>
            <a href="{{ route('about') }}" class="nav-link text-white/80 hover:text-white transition">Tentang Kami</a>
            <a href="{{ route('facilities') }}" class="nav-link text-white/80 hover:text-white transition">Fasilitas</a>
            <a href="{{ route('attractions') }}" class="nav-link text-white/80 hover:text-white transition">Atraksi Wisata</a>
            <a href="{{ route('gallery') }}" class="nav-link text-white/80 hover:text-white transition">Galeri</a>
            <a href="{{ route('packages') }}" class="nav-link text-white/80 hover:text-white transition">Packages</a>
            <a href="{{ route('contact') }}" class="nav-link text-white/80 hover:text-white transition">Kontak</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        if (window.scrollY > 30) {
            navbar.classList.remove('bg-transparent/0');
            navbar.classList.add('bg-primary-900');
        } else {
            navbar.classList.add('bg-transparent/0');
            navbar.classList.remove('bg-primary-900');
        }
    });
</script>
