<footer class="bg-gray-800 text-white py-8">
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
        <!-- Company Information Section -->
        <div class="flex flex-col items-center md:items-start mb-4">
            <img src="{{ asset('img/logo.png') }}" alt="Sambas Karya Perkasa" class="h-24 lg:h-48 mb-4">
            <div class="text-center md:text-left">
                <h2 class="text-xl font-bold">PT. Sambas Karya Perkasa</h2>
                <p class="text-gray-600 mt-1">
                    Jl. Raya Sambas No. 123, Sambas, Kalimantan Barat, Indonesia <br>
                    Phone: +62 822-5683-1863 <br>
                    Email: pt.sambaskaryaperkasa@gmail.com
                </p>
            </div>
        </div>

        <!-- Navigation Section -->
        <nav class="flex flex-col items-center md:items-start">
            <h2 class="text-xl font-bold mb-6">Navigation</h2>
            <ul class="text-center md:text-left space-y-2">
                <li>
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">About Us</a>
                </li>
                <li>
                    <a href="{{ route('sunward.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Sunward</a>
                </li>
                <li>
                    <a href="{{ route('rental.index') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Machinery Rental</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="flex items-center px-4 py-2 text-sm font-semibold text-gray-300 hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Social Media Section -->
        <div class="flex flex-col items-center md:items-start">
            <h2 class="text-xl font-bold mb-6">Follow Us</h2>
            <div class="flex flex-col justify-center space-y-2">
                <a href="https://www.instagram.com/skp_sunward/" target="_blank" class="text-gray-300 hover:text-teal-500 flex space-x-3">
                    <i class="fab fa-instagram fa-2x"></i>
                    <p class="text-gray-600">skp_sunward</p>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61551899050491" target="_blank" class="text-gray-300 hover:text-teal-500 flex space-x-3">
                    <i class="fab fa-facebook fa-2x"></i>
                    <p class="text-gray-600">Skp Sunward </p>
                </a>
                <a href="https://wa.me/6282256831863" target="_blank" class="text-gray-300 hover:text-teal-500 flex space-x-3">
                    <i class="fab fa-whatsapp fa-2x"></i>
                    <p class="text-gray-600">+62 822-5683-1863</p>
                </a>
            </div>
        </div>

        <!-- Sunward Information Section -->
        <div class="flex flex-col items-center md:items-start">
            <h2 class="text-xl font-bold mb-6">About Sunward</h2>
            <p class="text-center md:text-left text-gray-600">
                <i class="fas fa-industry mr-2"></i> Sunward is a leading heavy equipment manufacturing company specializing in construction machinery and equipment solutions. We offer innovative and reliable products to meet all your construction needs.
            </p>
        </div>
    </div>
</footer>