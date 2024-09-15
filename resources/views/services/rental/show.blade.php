@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-8 mt-20">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
        <img src="{{ $rental->image_url }}" class="w-full h-96 object-cover" alt="{{ $rental->name }}">
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-4 text-center text-gray-800">{{ $rental->name }}</h1>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">{{ $rental->description }}</p>

            <!-- Rental Details -->
            <div class="bg-gray-100 p-6 rounded-lg mb-6 shadow-inner">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Details</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li><strong>Category:</strong> {{ $rental->category }}</li>
                    <li><strong>Price:</strong> <span class="text-green-500 font-bold">Rp {{ number_format($rental->price, 2, ',', '.') }}</span></li>
                    <li><strong>Available From:</strong>
                        {{ $rental->available_from ? $rental->available_from->format('F d, Y') : 'N/A' }}
                    </li>
                    <li><strong>Available To:</strong>
                        {{ $rental->available_to ? $rental->available_to->format('F d, Y') : 'N/A' }}
                    </li>
                    <li><strong>Availability Status:</strong>
                        <span class="{{ $rental->availability_status ? 'text-green-500' : 'text-red-500' }}">
                            {{ $rental->availability_status ? 'Available' : 'Not Available' }}
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Contact or Booking Section -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('rental.index') }}" class="bg-gray-300 text-gray-800 hover:bg-gray-400 px-6 py-2 rounded-lg inline-block transform transition duration-300 hover:scale-105">Back to Rentals</a>
                <a href="mailto:info@example.com" class="bg-blue-500 text-white hover:bg-blue-600 px-6 py-2 rounded-lg inline-block transform transition duration-300 hover:scale-105">Contact for Booking</a>
            </div>
        </div>
    </div>
</div>
@endsection
s