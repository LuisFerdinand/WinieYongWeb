@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-20 lg:px-6 min-h-screen flex flex-col">

    <!-- Breadcrumb and Rental Name -->
    <section class="mb-4 lg:mb-6">
        <p class="text-teal-600 font-bold mb-2">|<span> Rental Properties</span></p>
        <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-800 mb-2 lg:mb-4">{{ $rental->name }}</h1>
        <a href="{{ route('rental.index') }}" class="text-teal-600 hover:underline">← Back to Rental List</a>
    </section>

    <!-- Rental Details Section -->
    <section class="flex flex-col lg:flex-row gap-6 lg:gap-12">

        <!-- Rental Image -->
        <div class="w-full lg:w-1/2">
            <img src="{{ $rental->image_url }}" alt="{{ $rental->name }}" class="w-full h-64 lg:h-96 object-cover rounded-lg shadow-lg mb-6 lg:mb-0 hover:shadow-2xl transition-shadow duration-300">
        </div>

        <!-- Rental Information -->
        <div class="w-full lg:w-1/2">
            <div class="mb-6 lg:mb-8">
                <h2 class="text-2xl lg:text-3xl font-semibold text-gray-800 mb-4">Rental Description</h2>
                <p class="text-base lg:text-lg text-gray-700 leading-relaxed">{{ $rental->description }}</p>
            </div>

            <!-- Price and Availability Info -->
            <div class="mb-6 lg:mb-8">
                <p class="text-xl lg:text-2xl font-bold text-teal-600 mb-2">Price: Rp {{ number_format($rental->price, 2, ',', '.') }}</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li><strong>Category:</strong> {{ ucfirst($rental->category) }}</li>
                    <li><strong>Available From:</strong> {{ $rental->available_from ? $rental->available_from->format('F d, Y') : 'N/A' }}</li>
                    <li><strong>Available To:</strong> {{ $rental->available_to ? $rental->available_to->format('F d, Y') : 'N/A' }}</li>
                    <li><strong>Availability Status:</strong> {{ $rental->availability_status ? 'Available' : 'Not Available' }}</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col md:flex-row gap-4">
                <!-- WhatsApp Contact Button -->
                <a href="{{ route('rentals.trackClick', $rental->id) }}" target="_blank" class="bg-teal-600 text-white px-4 py-3 lg:px-6 lg:py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300 inline-block text-center">
                    Contact via WhatsApp
                </a>
                <!-- Back to Rentals Button -->
                <a href="{{ route('rental.index') }}" class="bg-white text-teal-600 px-4 py-3 lg:px-6 lg:py-3 border border-teal-600 rounded-md shadow-md hover:bg-teal-100 transition duration-300 inline-block text-center">
                    Back to Rental List
                </a>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="mt-8">
        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-2">Location</h2>
            <div class="w-full h-64 rounded-lg overflow-hidden">
                <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{ urlencode($rental->location) }}&output=embed"></iframe>
            </div>
        </div>
    </section>
</div>

@endsection