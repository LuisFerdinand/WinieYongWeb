<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Heavy Machinery Workshop')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Include Navbar -->
    @include('layouts.partials.navbar')

    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>

    <script src="{{ asset('js/navbar.js') }}" defer></script>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-[1440px] mx-auto flex items-center justify-between px-4">
            <!-- Company Information Section -->
            <div class="flex flex-col justify-center items-center mb-4 w-1/4">
                <img src="img/logo.png" alt="Sambas Karya Perkasa" class="h-48">
                <div class="text-center">
                    <h2 class="text-xl font-bold">Sambas Karya Perkasa</h2>
                    <p class="text-gray-600 mt-1">
                        Jl. Raya Sambas No. 123, Sambas, Kalimantan Barat, Indonesia <br>
                        Phone: +62 123 456 789 <br>
                        Email: info@sambaskaryaperkasa.com
                    </p>
                </div>
            </div>

            <!-- Navigation Section -->
            <nav class="flex flex-col items-center h-48 text-white w-1/4">
                <h2 class="text-xl font-bold mb-6">Navigation</h2>
                <ul class="text-center space-y-2">
                    <li>
                        <a href="/" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">About Us</a>
                    </li>
                    <li>
                        <a href="/services" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Services</a>
                    </li>
                    <li>
                        <a href="/contact" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Contact</a>
                    </li>
                    <li>
                        <a href="/products" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Products</a>
                    </li>
                </ul>
            </nav>

            <!-- Social Media Section -->
            <div class="flex flex-col items-center h-48 w-1/4">
                <h2 class="text-xl font-bold mb-6 w-16">Follow Us</h2>
                <div class="flex flex-col gap-4">
                    <a href="https://www.instagram.com" target="_blank" class="text-gray-300 hover:text-teal-500">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="text-gray-300 hover:text-teal-500">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://wa.me/123456789" target="_blank" class="text-gray-300 hover:text-teal-500">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Sunward Information Section -->
            <div class="flex flex-col items-center h-48 w-1/4">
                <h2 class="text-xl font-bold mb-6">About Sunward</h2>
                <p class="text-center text-gray-600">
                    <i class="fas fa-industry mr-2"></i> Sunward is a leading heavy equipment manufacturing company specializing in construction machinery and equipment solutions. We offer innovative and reliable products to meet all your construction needs.
                </p>
            </div>
        </div>
    </footer>



</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</html>