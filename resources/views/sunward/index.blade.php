@extends('layouts.app')

@section('title', 'Sunward Products')

@section('content')
<div class="max-w-[1440px] mx-auto py-20 px-6">

    <!-- Introduction Section -->
    <section class="py-16">
        <p class="text-teal-600 tracking-widest font-bold mb-2">|<span> Sunward</span></p>
        <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6">Welcome to Sunward Heavy Machinery</h1>
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


    <!-- Product Showcase Section -->
    <section class="my-16" x-data="{ 
    activeIndex: 0,
    totalProducts: {{ count($products) }},
    next() {
        this.activeIndex = (this.activeIndex + 1) % this.totalProducts;
    },
    prev() {
        this.activeIndex = (this.activeIndex - 1 + this.totalProducts) % this.totalProducts;
    }
}">
        <p class="text-teal-600 text-center tracking-widest font-bold mb-2">|<span> Products</span></p>
        <h2 class="text-4xl md:text-6xl font-bold mb-8 text-gray-800 text-center">Explore Sunward Products</h2>
        <div class="relative w-full overflow-hidden">
            <!-- Flex Container for Image and Product Info -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-8">
                <!-- Image Carousel -->
                <div class="relative w-full md:w-1/2 h-64 md:h-96">
                    @foreach($products as $index => $product)
                    <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out"
                        :class="{ 'opacity-100': activeIndex === {{ $index }}, 'opacity-0': activeIndex !== {{ $index }} }">
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-full object-contain">
                    </div>
                    @endforeach

                </div>
                <!-- Arrow Controls -->
                <button @click="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r-md hover:bg-opacity-75 transition-colors duration-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l-md hover:bg-opacity-75 transition-colors duration-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Product Information -->
                <div class="w-full md:w-1/2 overflow-hidden p-6">
                    @foreach($products as $index => $product)
                    <div x-show="activeIndex === {{ $index }}" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100">
                        <h3 class="text-3xl font-semibold text-gray-800 uppercase mb-0">{{ $product->name }}</h3>
                        <p class="text-teal-500 font-bold tracking-wide mb-2">{{$product->model_number}}</p>
                        <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 200) }}</p>
                        <p class="text-xl font-bold mb-4">Rp. {{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('sunward.show', $product->slug) }}" class="text-teal-600 hover:underline">View Details</a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Dot Controls -->
            <div class="flex justify-center space-x-2">
                @foreach($products as $index => $product)
                <button @click="activeIndex = {{ $index }}"
                    class="w-3 h-3 rounded-full transition-colors duration-200 ease-in-out"
                    :class="{ 'bg-teal-600': activeIndex === {{ $index }}, 'bg-gray-300': activeIndex !== {{ $index }} }">
                </button>
                @endforeach
            </div>
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