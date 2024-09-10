<!-- Navbar Partial -->
<header class="bg-gray-900 text-white p-4 fixed w-full top-0 left-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Heavy Machinery Workshop</h1>
        <nav>
            <ul class="flex space-x-4">
                <!-- Home -->
                <li>
                    <a href="{{ route('home') }}" class="hover:text-yellow-500 {{ request()->routeIs('home') ? 'text-yellow-500' : '' }}">Home</a>
                </li>

                <!-- About -->
                <li>
                    <a href="{{ route('about') }}" class="hover:text-yellow-500 {{ request()->routeIs('about') ? 'text-yellow-500' : '' }}">About</a>
                </li>

                <!-- Products Dropdown -->
                <li class="relative group">
                    <a href="{{ route('products') }}" class="hover:text-yellow-500 {{ request()->routeIs('products') ? 'text-yellow-500' : '' }}">
                        Products
                    </a>
                    <ul class="absolute hidden group-hover:block bg-gray-800 mt-2 rounded shadow-lg z-40">
                        <li><a href="{{ route('product.detail', 'excavators') }}" class="block px-4 py-2 hover:bg-gray-700">Excavators</a></li>
                        <li><a href="{{ route('product.detail', 'cranes') }}" class="block px-4 py-2 hover:bg-gray-700">Cranes</a></li>
                        <li><a href="{{ route('product.detail', 'bulldozers') }}" class="block px-4 py-2 hover:bg-gray-700">Bulldozers</a></li>
                    </ul>
                </li>

                <!-- Services Dropdown -->
                <li class="relative group">
                    <a href="{{ route('services') }}" class="hover:text-yellow-500 {{ request()->routeIs('services') ? 'text-yellow-500' : '' }}">
                        Services
                    </a>
                    <ul class="absolute hidden group-hover:block bg-gray-800 mt-2 rounded shadow-lg z-40">
                        <li><a href="{{ route('service.detail', 'rentals') }}" class="block px-4 py-2 hover:bg-gray-700">Machinery Rentals</a></li>
                        <li><a href="{{ route('service.detail', 'maintenance') }}" class="block px-4 py-2 hover:bg-gray-700">Repair & Maintenance</a></li>
                        <li><a href="{{ route('service.detail', 'parts') }}" class="block px-4 py-2 hover:bg-gray-700">Parts & Accessories</a></li>
                    </ul>
                </li>

                <!-- Contact -->
                <li>
                    <a href="#contact" class="hover:text-yellow-500 {{ request()->is('contact') ? 'text-yellow-500' : '' }}">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>