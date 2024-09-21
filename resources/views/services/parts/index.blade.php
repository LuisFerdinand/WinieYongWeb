@extends('layouts.app')

@section('title', 'Available Parts')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-20 mt-20">
    <p class="text-teal-600 font-bold text-center mb-2">|<span> Parts</span></p>
    <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800">Check out our Available Parts</h1>

    <!-- Search Bar and Filters -->
    <div class="mb-8 flex justify-center">
        <form action="{{ route('parts.index') }}" method="GET" class="flex flex-wrap justify-center space-x-4">
            <input type="text" name="search" placeholder="Search parts..." class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0" value="{{ request('search') }}">
            <select name="category" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0">
                <option value="">Category</option>
                <option value="engine" {{ request('category') == 'engine' ? 'selected' : '' }}>Engine</option>
                <option value="body" {{ request('category') == 'body' ? 'selected' : '' }}>Body</option>
                <option value="interior" {{ request('category') == 'interior' ? 'selected' : '' }}>Interior</option>
            </select>
            <select name="price_range" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm w-full md:w-auto mb-4 md:mb-0">
                <option value="">Price Range</option>
                <option value="0-500000" {{ request('price_range') == '0-500000' ? 'selected' : '' }}>0 - 500,000</option>
                <option value="500000-1000000" {{ request('price_range') == '500000-1000000' ? 'selected' : '' }}>500,000 - 1,000,000</option>
                <option value="1000000-2000000" {{ request('price_range') == '1000000-2000000' ? 'selected' : '' }}>1,000,000 - 2,000,000</option>
            </select>
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg w-full md:w-auto">Filter</button>
        </form>
    </div>

    <!-- Parts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($parts as $part)
        <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
            <div class="relative">
                <img src="{{ $part->image_url }}" class="w-full h-48 object-cover" alt="{{ $part->name }}">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h2 class="text-xl font-semibold mb-2 text-white">{{ $part->name }}</h2>
                </div>
            </div>
            <div class="p-4">
                <p class="text-gray-600 mb-4">{{ Str::limit($part->description, 100) }}</p>
                <p class="text-gray-800 font-bold mb-4">Rp {{ number_format($part->price, 2, ',', '.') }}</p>
                <p class="text-gray-700 mb-2"><strong>Contact:</strong> {{ $part->contact }}</p>
                <p class="text-gray-700 mb-2"><strong>Location:</strong> {{ $part->location }}</p>
                <a href="{{ route('parts.show', $part->id) }}" class="text-teal-600 bg-white border border-teal-600 hover:bg-teal-600 hover:text-white px-4 py-2 rounded-lg inline-block transition duration-300 ease-in-out">View Details</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        {{ $parts->appends(request()->input())->links() }}
    </div>
</div>
@endsection