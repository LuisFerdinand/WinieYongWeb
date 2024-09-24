@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-20 lg:px-6 min-h-screen flex flex-col">

    <!-- Breadcrumb and Part Name -->
    <section class="mb-4 lg:mb-6">
        <p class="text-teal-600 font-bold mb-2">|<span> Parts</span></p>
        <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-800 mb-2 lg:mb-4">{{ $part->name }}</h1>
        <a href="{{ route('parts.index') }}" class="text-teal-600 hover:underline">← Back to Parts List</a>
    </section>

    <!-- Part Details Section -->
    <section class="flex flex-col lg:flex-row gap-6 lg:gap-12">

        <!-- Part Image -->
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('storage/' . $part->image_url) }}" class="w-full h-auto  lg:h-96 object-cover rounded-lg shadow-lg mb-6 lg:mb-0 hover:shadow-2xl transition-shadow duration-300" alt="{{ $part->name }}">
        </div>

        <!-- Part Information -->
        <div class="w-full lg:w-1/2">
            <div class="mb-6 lg:mb-8">
                <h2 class="text-2xl lg:text-3xl font-semibold text-gray-800 mb-4">Part Description</h2>
                <p class="text-base lg:text-lg text-gray-700 leading-relaxed">{{ $part->description }}</p>
            </div>

            <!-- Price and Details Info -->
            <div class="mb-6 lg:mb-8">
                <p class="text-xl lg:text-2xl font-bold text-teal-600 mb-2">Price: Rp {{ number_format($part->price, 2, ',', '.') }}</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li><strong>Category:</strong> {{ $part->category }}</li>
                    <li><strong>Contact:</strong> {{ $part->contact }}</li>
                    <li><strong>Location:</strong> {{ $part->location }}</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Contact Button -->
                <a href="mailto:{{ $part->contact }}" class="bg-teal-600 text-white px-4 py-3 lg:px-6 lg:py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300 inline-block text-center">
                    Contact for Purchase
                </a>
                <!-- Back to Parts Button -->
                <a href="{{ route('parts.index') }}" class="bg-white text-teal-600 px-4 py-3 lg:px-6 lg:py-3 border border-teal-600 rounded-md shadow-md hover:bg-teal-100 transition duration-300 inline-block text-center">
                    Back to Parts List
                </a>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="mt-8">
        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-2">Location</h2>
            <div class="w-full h-64 rounded-lg overflow-hidden">
                <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{ urlencode($part->location) }}&output=embed"></iframe>
            </div>
        </div>
    </section>
</div>
@endsection