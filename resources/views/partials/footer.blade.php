    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Ciwangun<span class="text-secondary-500">Indah</span>Camp</h3>
                    <p class="text-gray-400 mb-4">Your gateway to unforgettable outdoor adventures in the heart of nature.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('packages') }}" class="text-gray-400 hover:text-white transition">Packages</a></li>
                        <li><a href="{{ route('facilities') }}" class="text-gray-400 hover:text-white transition">Facilities</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-gray-400 hover:text-white transition">Gallery</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary-500"></i>
                            <span>Jl. Ciwangun Indah No.123, Bandung, Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-primary-500"></i>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-primary-500"></i>
                            <span>info@ciwangunindahcamp.com</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to get updates on special offers and events.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-900 w-full">
                        <button type="submit" class="bg-primary-600 hover:bg-primary-700 px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Ciwangun Indah Camp. All rights reserved.</p>
            </div>
        </div>
    </footer>

