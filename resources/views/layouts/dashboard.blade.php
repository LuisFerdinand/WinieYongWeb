<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Optional: Include Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Mobile Hamburger Button -->
    <div class="md:hidden p-4 bg-gray-800 text-white flex justify-between items-center">
        <button id="hamburger-btn" class="focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
        <h1 class="text-xl font-bold">Admin Dashboard</h1>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed md:relative w-64 bg-gray-800 min-h-screen flex flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out z-50">
            <div class="text-white text-center p-6">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="flex-1 px-2 space-y-1">
                <ul>
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                            <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                            <i class="fas fa-home mr-3"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                            <i class="fas fa-users mr-3"></i> Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('project-management.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200">
                            <i class="fa-solid fa-briefcase mr-3"></i> Projects
                        </a>
                    </li>


                    <!-- Rentals Dropdown Menu -->
                    <li class="relative">
                        <button id="rentals-button" type="button" class="w-full flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            <span class="flex items-center">
                                <i class="fas fa-truck-moving mr-3"></i> Products
                            </span>
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="rentals-dropdown" class="hidden mt-1 space-y-1">
                            <a href="{{ route('rental-management.index') }}" class="block px-8 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200" role="menuitem">
                                <i class="fas fa-cogs mr-2"></i> Machinery Rentals
                            </a>
                            <a href="{{ route('job-management.index') }}" class="block px-8 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200" role="menuitem">
                                <i class="fas fa-briefcase mr-2"></i> Job Management
                            </a>
                            <a href="{{ route('part-management.index') }}" class="block px-8 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200" role="menuitem">
                                <i class="fas fa-wrench mr-2"></i> Parts & Accessories
                            </a>
                            <a href="{{ route('product-management.index') }}" class="block px-8 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200" role="menuitem">
                                <i class="fas fa-industry mr-2"></i> Sunward
                            </a>
                        </div>

                    </li>

                    <li>
                        <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors duration-200"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-3"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6 overflow-auto">
            @yield('content')
        </div>
    </div>

    <!-- JavaScript for Sidebar Toggle and Dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hamburger button toggle
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const sidebar = document.getElementById('sidebar');

            hamburgerBtn.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });

            // Rentals dropdown toggle
            const rentalsButton = document.getElementById('rentals-button');
            const rentalsDropdown = document.getElementById('rentals-dropdown');

            rentalsButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent click from reaching the document
                rentalsDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                rentalsDropdown.classList.add('hidden');
            });

            // Prevent document click from closing dropdown when clicking inside the dropdown itself
            rentalsDropdown.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>