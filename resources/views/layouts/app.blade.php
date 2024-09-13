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
    </main>\

    <script src="{{ asset('js/navbar.js') }}" defer></script>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Heavy Machinery Workshop. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>