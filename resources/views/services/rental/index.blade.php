@extends('layouts.app')

@section('title', 'Available Rentals')

@section('content')
<div class="max-w-[1440px] mx-auto text-center px-4 py-20 mt-20">
    <p class="text-teal-600 font-bold mb-2">|<span> Rentals</span></p>
    <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800">Available Rentals</h1>

    <!-- Search Bar and Filters -->
    <div class="mb-8 flex justify-center">
        <form action="{{ route('rentals.index') }}" method="GET" class="flex flex-wrap justify-center space-x-4">
            <input type="text" name="search" placeholder="Search rentals..." class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0" value="{{ request('search') }}">
            <select name="category" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0">
                <option value="">Category</option>
                <option value="apartment" {{ request('category') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                <option value="house" {{ request('category') == 'house' ? 'selected' : '' }}>House</option>
                <option value="condo" {{ request('category') == 'condo' ? 'selected' : '' }}>Condo</option>
            </select>
            <select name="price_range" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0">
                <option value="">Price Range</option>
                <option value="0-1000000" {{ request('price_range') == '0-1000000' ? 'selected' : '' }}>0 - 1,000,000</option>
                <option value="1000000-2000000" {{ request('price_range') == '1000000-2000000' ? 'selected' : '' }}>1,000,000 - 2,000,000</option>
                <option value="2000000-3000000" {{ request('price_range') == '2000000-3000000' ? 'selected' : '' }}>2,000,000 - 3,000,000</option>
            </select>
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg w-full md:w-auto">Filter</button>
        </form>
    </div>

    <!-- Rentals Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($rentals as $rental)
        <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
            <div class="relative">
                <img id="currentImage" src="{{ asset('storage/' . $rental->image_url) }}" alt="{{ $rental->name }}" class="w-full h-32 object-cover mb-4">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h2 class="text-xl font-semibold mb-2 text-white">{{ $rental->name }}</h2>
                    <span class="bg-{{ $rental->category === 'apartment' ? 'blue' : ($rental->category === 'house' ? 'green' : 'orange') }}-500 text-white px-2 py-1 text-sm rounded-full">{{ ucfirst($rental->category) }}</span>
                </div>
            </div>
            <div class="p-4">
                <p class="text-gray-600 mb-4">{{ Str::limit($rental->description, 100) }}</p>
                <p class="text-gray-800 font-bold mb-4">Rp {{ number_format($rental->price, 2, ',', '.') }}</p>
                <a href="{{ route('rental.show', $rental->id) }}" class="text-teal-600 bg-white border border-teal-600 hover:bg-teal-600 hover:text-white px-4 py-2 rounded-lg inline-block transition duration-300 ease-in-out">View Details</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        {{ $rentals->appends(request()->input())->links() }}
    </div>
</div>
@endsection