@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-8 mt-20">
    <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Available Parts</h1>

    <!-- Search Bar and Filters -->
    <div class="mb-8 flex justify-center">
        <form action="{{ route('parts.index') }}" method="GET" class="flex space-x-4">
            <input type="text" name="search" placeholder="Search parts..." class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm" value="{{ request('search') }}">
            <select name="category" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm">
                <option value="">Category</option>
                <option value="engine" {{ request('category') == 'engine' ? 'selected' : '' }}>Engine</option>
                <option value="body" {{ request('category') == 'body' ? 'selected' : '' }}>Body</option>
                <option value="interior" {{ request('category') == 'interior' ? 'selected' : '' }}>Interior</option>
            </select>
            <select name="price_range" class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm">
                <option value="">Price Range</option>
                <option value="0-500000" {{ request('price_range') == '0-500000' ? 'selected' : '' }}>0 - 500,000</option>
                <option value="500000-1000000" {{ request('price_range') == '500000-1000000' ? 'selected' : '' }}>500,000 - 1,000,000</option>
                <option value="1000000-2000000" {{ request('price_range') == '1000000-2000000' ? 'selected' : '' }}>1,000,000 - 2,000,000</option>
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Filter</button>
        </form>
    </div>

    <!-- Parts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($parts as $part)
        <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
            <img src="{{ $part->image_url }}" class="w-full h-48 object-cover" alt="{{ $part->name }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $part->name }}</h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($part->description, 100) }}</p>
                <p class="text-gray-800 font-bold mb-4">Rp {{ number_format($part->price, 2, ',', '.') }}</p>
                <p class="text-gray-700 mb-2"><strong>Contact:</strong> {{ $part->contact }}</p>
                <p class="text-gray-700 mb-2"><strong>Location:</strong> {{ $part->location }}</p>
                <a href="{{ route('parts.show', $part->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg inline-block">View Details</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $parts->appends(request()->input())->links() }}
    </div>
</div>
@endsection