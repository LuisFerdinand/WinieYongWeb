@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 mt-20">
    <h1 class="text-4xl md:text-6xl text-center font-bold leading-tight mb-8">Rentals</h1>


    <!-- Search Bar and Filters -->
    <div class="mb-8 flex justify-center">
        <form action="{{ route('rentals.index') }}" method="GET" class="flex space-x-4">
            <input type="text" name="search" placeholder="Search rentals..." class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm" value="{{ request('search') }}">
            <select name="category" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm">
                <option value="">Category</option>
                <option value="apartment" {{ request('category') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                <option value="house" {{ request('category') == 'house' ? 'selected' : '' }}>House</option>
                <option value="condo" {{ request('category') == 'condo' ? 'selected' : '' }}>Condo</option>
            </select>
            <select name="price_range" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm">
                <option value="">Price Range</option>
                <option value="0-1" {{ request('price_range') == '0-1' ? 'selected' : '' }}>0 - 1,000,000</option>
                <option value="1-2" {{ request('price_range') == '1-2' ? 'selected' : '' }}>1,000,000 - 2,000,000</option>
                <option value="2-3" {{ request('price_range') == '2-3' ? 'selected' : '' }}>2,000,000 - 3,000,000</option>
                <option value="3-4" {{ request('price_range') == '3-4' ? 'selected' : '' }}>3,000,000 - 4,000,000</option>
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Filter</button>
        </form>
    </div>

    <!-- Rentals Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($rentals as $rental)
        <div class="bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105 duration-200">
            <img src="{{ $rental->image_url }}" class="w-full h-48 object-cover" alt="{{ $rental->name }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $rental->name }}</h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($rental->description, 100) }}</p>
                <p class="text-gray-800 font-bold mb-4">Rp {{ number_format($rental->price, 2, ',', '.') }}</p>
                <a href="{{ route('rental.show', $rental->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg inline-block">View Details</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $rentals->appends(request()->input())->links() }}
    </div>
</div>
@endsection