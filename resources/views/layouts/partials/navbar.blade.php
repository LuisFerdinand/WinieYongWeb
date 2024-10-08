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
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('home') ? 'bg-gray-700' : '' }}">
                        Home
                    </a>
                </li>

                <!-- About -->
                <li>
                    <a href="{{ route('about') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('about') ? 'bg-gray-700' : '' }}">
                        About
                    </a>
                </li>

                <!-- Products -->
                <li>
                    <a href="{{ route('sunward.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('products.sunward.index') ? 'bg-gray-700' : '' }}">
                        Sunward
                    </a>
                </li>

                <!-- Machinery Rental -->
                <li>
                    <a href="{{ route('rental.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('rental.index') ? 'bg-gray-700' : '' }}">
                        Machinery Rental
                    </a>
                </li>

                <!-- Career -->
                <li>
                    <a href="{{ route('career.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->routeIs('career.index') ? 'bg-gray-700' : '' }}">
                        Career
                    </a>
                </li>

                <!-- Contact -->
                <li>
                    <a href="{{ route('contact') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 {{ request()->is('contact') ? 'bg-gray-700' : '' }}">
                        Contact
                    </a>
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
                <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Home
                </a>

                <!-- Mobile About -->
                <a href="{{ route('about') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    About
                </a>

                <!-- Mobile Products -->
                <a href="{{ route('sunward.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Sunward
                </a>

                <!-- Mobile Machinery Rental -->
                <a href="{{ route('rental.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Machinery Rental
                </a>

                <!-- Mobile Career -->
                <a href="{{ route('career.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Career
                </a>

                <!-- Mobile Contact -->
                <a href="{{ route('contact') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Contact
                </a>
            </div>
        </div>
</header>
<script>
    // Get elements
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close');

    // Function to open the mobile menu
    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
    }

    // Function to close the mobile menu
    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
    }

    // Event listener for the mobile menu button
    mobileMenuButton.addEventListener('click', openMobileMenu);

    // Event listener for the close button
    mobileMenuCloseButton.addEventListener('click', closeMobileMenu);

    // Event listener to close the menu when clicking outside of it
    document.addEventListener('click', (event) => {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnButton = mobileMenuButton.contains(event.target);

        // Close the menu if the click is outside the menu and the button
        if (!isClickInsideMenu && !isClickOnButton) {
            closeMobileMenu();
        }
    });
</script>