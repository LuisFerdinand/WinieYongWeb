@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="max-w-[1440px] mx-auto py-20 px-6">

    <!-- Introduction Section -->
    <section class="my-16">
        <p class="text-teal-600 font-bold mb-2">|<span> Sunward</span></p>
        <h1 class="text-5xl font-extrabold text-gray-800 mb-6">Welcome to Sunward Heavy Machinery</h1>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            Sunward is an innovative and leading brand in the heavy machinery industry, specializing in the production of construction equipment that meets global standards. With a wide range of products like excavators, cranes, bulldozers, and more, Sunward is dedicated to advancing the construction industry with superior technology and durable equipment.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            Whether you're in construction, mining, or any other heavy-duty industry, Sunward offers machinery that will make your work easier, faster, and more efficient. Our machinery is built to handle the toughest environments while maintaining performance and precision.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            Discover more about our cutting-edge products below and take your projects to the next level with Sunward.
        </p>
        <!-- Link to Sunward Official Website with Teal Button Styling -->
        <a href="https://id.sunwardmachine.com/" target="_blank" class="inline-block bg-teal-600 text-white px-6 py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300">
            Visit Sunward Official Website
        </a>
    </section>

    <hr>

    <!-- Product Carousel Section -->
    <section class="mt-16" x-data="{ activeIndex: 0 }">
        <h2 class="text-4xl font-bold mb-8 text-gray-800 text-center">Explore Sunward Products</h2>
        <div class="relative w-full overflow-hidden">
            <!-- Carousel Items -->
            <div class="flex transition-transform duration-700 ease-in-out"
                :style="{ transform: `translateX(-${activeIndex * 100}%)` }">
                @foreach($products as $index => $product)
                <div class="flex-none w-full md:w-1/3 p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-64  object-cover">
                        <div class="px-6 py-10">
                            <h3 class="text-2xl font-semibold mb-2 text-gray-800">{{ $product->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 100) }}</p>
                            <p class="text-xl font-bold mb-4">Rp. {{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('products.sunward.show', $product->id) }}" class="text-teal-600 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Carousel Controls with Teal Background -->
            <button @click="activeIndex = (activeIndex - 1 + Math.ceil({{ count($products) }} / getVisibleItems())) % Math.ceil({{ count($products) }} / getVisibleItems())"
                class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-teal-600 text-white px-5 py-3 rounded-full hover:bg-teal-700 focus:outline-none transition-colors duration-200 text-lg">
                &#8249;
            </button>
            <button @click="activeIndex = (activeIndex + 1) % Math.ceil({{ count($products) }} / getVisibleItems())"
                class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-teal-600 text-white px-5 py-3 rounded-full hover:bg-teal-700 focus:outline-none transition-colors duration-200 text-lg">
                &#8250;
            </button>

        </div>
    </section>
</div>

<!-- JavaScript for Carousel -->
<script>
    function getVisibleItems() {
        // Return different values for different screen sizes (using Tailwind breakpoints)
        if (window.innerWidth >= 1024) return 3; // large screens
        if (window.innerWidth >= 768) return 2; // medium screens
        return 1; // mobile screens
    }

    // Recalculate the number of visible items when the window is resized
    window.addEventListener('resize', () => {
        document.querySelectorAll('[x-data]').forEach(el => {
            el.__x.$data.activeIndex = 0; // Reset carousel position when resizing
        });
    });
</script>

<script src="https://unpkg.com/alpinejs" defer></script>
@endsection