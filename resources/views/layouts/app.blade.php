<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Heavy Machinery Workshop')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

</head>

<body class="bg-gray-100">

    <!-- Include Navbar -->
    @include('layouts.partials.navbar')
    <x-breadcrumb />



    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/navbar.js') }}" defer></script>

    @include('layouts.partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-QJkL7+Gpe2H4QvnkFqC+GMi5Ymwi5gOv8PKSy1M0tPZh0aL3nvw9Ye0CDm2e6ZPz/hHovyy2v4eqsSzJrs0Mjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init();
    </script>



</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-Gfhz2LCblmsLhG6Fyb1VYyIZ/mR6v4UTd1d9A+1nEwMebIj/64yHb+k0HYsWBQ4jHfnOGo2ihHCsg+nU5p4cvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</html>