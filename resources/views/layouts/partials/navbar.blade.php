<!-- Navbar Partial -->
<header id="navbar" class="bg-gray-900 text-white p-4 fixed w-full top-0 left-0 z-50">
    <div class="max-w-[1440px] mx-auto flex justify-between items-center">
        <!-- Logo and Title -->
        <h1 class="text-xl font-bold">Jaya Sambas Perkasa</h1>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex">
            <ul class="flex space-x-1">
                <!-- Home -->
                <li>
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('home') ? 'bg-gray-700' : 'bg-transparent' }}">
                        <a href="{{ route('home') }}" class="w-full h-full">Home</a>
                    </button>
                </li>

                <!-- About -->
                <li>
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('about') ? 'bg-gray-700' : 'bg-transparent' }}">
                        <a href="{{ route('about') }}" class="w-full h-full">About</a>
                    </button>
                </li>

                <!-- Products Dropdown -->
                <li class="relative inline-block text-left">
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 bg-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        Products
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-gray-800 shadow-lg ring-1 ring-black ring-opacity-5 hidden" id="product-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('product.detail', 'excavators') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Excavators</a>
                            <a href="{{ route('product.detail', 'cranes') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Cranes</a>
                            <a href="{{ route('product.detail', 'bulldozers') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Bulldozers</a>
                        </div>
                    </div>
                </li>

                <!-- Services Dropdown -->
                <li class="relative inline-block text-left">
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 bg-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" id="service-button" aria-expanded="false" aria-haspopup="true">
                        Services
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-gray-800 shadow-lg ring-1 ring-black ring-opacity-5 hidden" id="service-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="service-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('rental.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Machinery Rentals</a>

                            <a href="{{ route('service.repair') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Repair & Maintenance</a>
                            <a href="{{ route('parts.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Parts & Accessories</a>

                        </div>
                    </div>
                </li>

                <!-- Contact -->
                <li>
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->is('contact') ? 'bg-gray-700' : 'bg-transparent' }}">
                        <a href="{{ route('contact') }}" class="w-full h-full">Contact</a>
                    </button>
                </li>
            </ul>
        </nav>

        <!-- Mobile Navigation Toggle -->
        <button class="md:hidden p-2 text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-500" id="mobile-menu-button">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div class="md:hidden fixed h-fit inset-0 bg-gray-900 bg-opacity-50 z-50 hidden" id="mobile-menu">
            <div class="flex flex-col p-4 space-y-4 bg-gray-900 h-full">
                <!-- Close Button -->
                <button class="bg-transparent self-end text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-500" id="mobile-menu-close">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Mobile Home -->
                <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <a href="{{ route('home') }}" class="w-full h-full">Home</a>
                </button>

                <!-- Mobile About -->
                <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <a href="{{ route('about') }}" class="w-full h-full">About</a>
                </button>

                <!-- Mobile Products Dropdown -->
                <div class="relative">
                    <div class="flex justify-center items-center">
                        <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 bg-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" id="mobile-product-button" aria-expanded="false" aria-haspopup="true">
                            Products
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown Menu -->
                    <div class="absolute z-50 left-0 mt-2 w-full bg-gray-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 hidden" id="mobile-product-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="mobile-product-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('product.detail', 'excavators') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Excavators</a>
                            <a href="{{ route('product.detail', 'cranes') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Cranes</a>
                            <a href="{{ route('product.detail', 'bulldozers') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Bulldozers</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Services Dropdown -->
                <div class="relative">
                    <div class="flex justify-center items-center">
                        <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 bg-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" id="mobile-service-button" aria-expanded="false" aria-haspopup="true">
                            Services
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-full bg-gray-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 hidden" id="mobile-service-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="mobile-service-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('rental.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Machinery Rentals</a>
                            <a href="{{ route('service.repair') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Repair & Maintenance</a>
                            <a href="{{ route('parts.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Parts & Accessories</a>
                        </div>
                    </div>

                    <!-- Mobile Contact -->
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <a href="{{ route('contact') }}" class="w-full h-full">Contact</a>
                    </button>
                </div>
            </div>
        </div>
</header>