<!-- Navbar Partial -->
<header id="navbar" class="bg-gray-900 text-white px-4 py-1 fixed w-full top-0 left-0 z-50">
    <div class="max-w-[1440px] mx-auto flex justify-between items-center">
        <!-- Logo and Title -->
        <h1 class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center text-gray-300">
                <img src="{{ asset('img/logo.png') }}" alt="Jaya Sambas Perkasa Logo" class="h-auto w-16 mr-1">
                <span class="text-[30px] mr-1"> |</span>
                <p class="text-xs font-inter pt-2 "> Sambas Karya <br> Perkasa</p>
            </a>
        </h1>


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
                            <a href="{{ route('products.sunward.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Sunward</a>

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

                <!-- Career -->
                <li>
                    <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <a href="{{ route('career.index') }}" class="w-full h-full">Career</a>
                    </button>
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
                            <a href="{{ route('products.sunward.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700" role="menuitem" tabindex="-1">Sunward</a>
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

                </div>
                <!-- Mobile Career -->
                <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <a href="{{ route('career.index') }}" class="w-full h-full">Career</a>
                </button>

                <!-- Mobile Contact -->
                <button type="button" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <a href="{{ route('contact') }}" class="w-full h-full">Contact</a>
                </button>
            </div>
        </div>

</header>





<nav class="absolute w-full z-10 top-[105px] text-gray-500 px-10" aria-label="breadcrumb">
    @if (!Request::is('/')) <!-- Check if the current URL is NOT '/' -->
    <div class="max-w-[1440px] mx-auto">
        <ol class="breadcrumb flex space-x-2 items-center text-sm">
            <!-- Home Link -->
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" class="text-teal-500 hover:text-teal-400 transition-colors duration-200">
                    <div class="flex justify-center items-center align-bottom">
                        <svg viewBox="0 0 576 512" class="me-2.5 h-3 w-3 -mt-0.5" xmlns="http://www.w3.org/2000/svg">
                            <path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/>
                        </svg>
                        <span class="">Beranda</span>
                    </div>
                </a>
            </li>

            @if (Request::segment(1))
            <span class="text-gray-500">›</span>
            <li class="breadcrumb-item">
                <a href="{{ url(Request::segment(1)) }}" class="text-teal-500 hover:text-teal-400 transition-colors duration-200">
                    {{ ucfirst(Request::segment(1)) }}
                </a>
            </li>
            @endif

            @if (Request::segment(2))
            <span class="text-gray-500">›</span>
            <li class="breadcrumb-item">
                <a href="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" class="text-teal-500 hover:text-teal-400 transition-colors duration-200">
                    {{ ucfirst(Request::segment(2)) }}
                </a>
            </li>
            @endif

            @if (Request::segment(3))
            <span class="text-gray-500">›</span>
            <li class="breadcrumb-item text-gray-500" aria-current="page">
                {{ ucfirst(Request::segment(3)) }}
            </li>
            @endif
        </ol>
    </div>
    @endif
</nav>
