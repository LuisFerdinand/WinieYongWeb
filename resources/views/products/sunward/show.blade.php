@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-28  lg:px-6 min-h-screen">

    <!-- Breadcrumb and Product Name -->
    <section class="mb-8">
        <p class="text-teal-600 font-bold">|<span> Sunward</span></p>
        <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-800 mb-2 lg:mb-4">{{ $product->name }}</h1>
    </section>

    <!-- Product Details Section -->
    <section class="flex flex-col lg:flex-row gap-8 lg:gap-12">

        <!-- Product Image -->
        <div class="w-full lg:w-1/2">
            <div class="relative pb-[100%] overflow-hidden">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="absolute top-0 left-0 w-full h-full object-cover object-center">
            </div>
        </div>

        <!-- Product Information -->
        <div class="w-full lg:w-1/2">
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Price and Stock Info -->
                <div class="mb-6">
                    <p class="text-3xl font-bold text-teal-600 mb-2">Rp. {{ number_format($product->price, 2) }}</p>
                    <p class="text-lg text-gray-700">Stock Available: <span class="font-semibold">{{ $product->stock }}</span></p>
                </div>

                <!-- Product Description -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Product Description</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                </div>

                <!-- Additional Details -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Product Details</h2>
                    <ul class="space-y-2">
                        @if($product->category)
                        <li><strong>Category:</strong> {{ $product->category }}</li>
                        @endif
                        @if($product->model_number)
                        <li><strong>Model Number:</strong> {{ $product->model_number }}</li>
                        @endif
                    </ul>
                </div>

                <!-- Specifications -->
                @if($product->specifications)
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Specifications</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $product->specifications }}</p>
                </div>
                @endif

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('products.trackClick', $product->id) }}" target="_blank"
                        class="bg-teal-600 text-white px-6 py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300 text-center flex-grow">
                        Contact via WhatsApp
                    </a>
                    <a href="{{ route('products.sunward.index') }}"
                        class="bg-white text-teal-600 px-6 py-3 border border-teal-600 rounded-md shadow-md hover:bg-teal-100 transition duration-300 text-center flex-grow">
                        Back to Product List
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection