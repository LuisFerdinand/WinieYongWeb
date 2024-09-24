@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-20 lg:px-6 min-h-screen flex flex-col justify-center">

    <!-- Breadcrumb and Product Name -->
    <section class="mb-4 lg:mb-6">
        <p class="text-teal-600 font-bold mb-2">|<span> Sunward</span></p>
        <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-800 mb-2 lg:mb-4">{{ $product->name }}</h1>
        <a href="{{ route('products.sunward.index') }}" class="text-teal-600 hover:underline">← Back to Product List</a>
    </section>

    <!-- Product Details Section -->
    <section class="flex flex-col lg:flex-row gap-6 lg:gap-12">

        <!-- Product Image -->
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-64  object-cover">
        </div>

        <!-- Product Information -->
        <div class="w-full lg:w-1/2">
            <div class="mb-6 lg:mb-8">
                <h2 class="text-2xl lg:text-3xl font-semibold text-gray-800 mb-4">Product Description</h2>
                <p class="text-base lg:text-lg text-gray-700 leading-relaxed">{{ $product->description }}</p>
            </div>

            <!-- Price and Stock Info -->
            <div class="mb-6 lg:mb-8">
                <p class="text-xl lg:text-2xl font-bold text-teal-600 mb-2">Price: Rp. {{ number_format($product->price, 2) }}</p>
                <p class="text-lg lg:text-xl text-gray-700 mb-4">Stock Available: {{ $product->stock }}</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col md:flex-row gap-4">
                <!-- WhatsApp Contact Button -->
                <a href="{{ route('products.trackClick', $product->id) }}" target="_blank"
                    class="bg-teal-600 text-white px-4 py-3 lg:px-6 lg:py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300 inline-block text-center">
                    Contact via WhatsApp
                </a>
                <!-- Back to Products Button -->
                <a href="{{ route('products.sunward.index') }}"
                    class="bg-white text-teal-600 px-4 py-3 lg:px-6 lg:py-3 border border-teal-600 rounded-md shadow-md hover:bg-teal-100 transition duration-300 inline-block text-center">
                    Back to Product List
                </a>
            </div>
        </div>
    </section>

</div>

<!-- Space for the Footer -->
<div class="mt-12"></div>
@endsection