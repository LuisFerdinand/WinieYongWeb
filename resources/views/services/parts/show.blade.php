@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-8 mt-20">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="relative">
            <img src="{{ $part->image_url }}" class="w-full h-96 object-cover" alt="{{ $part->name }}">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
            <div class="absolute bottom-0 left-0 p-6">
                <h1 class="text-4xl font-bold text-white mb-2">{{ $part->name }}</h1>
                <p class="text-lg text-white">{{ Str::limit($part->description, 150) }}</p>
            </div>
        </div>
        <div class="p-6">
            <!-- Part Details -->
            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-2xl font-semibold mb-2">Details</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-600">
                    <li><strong>Category:</strong> {{ $part->category }}</li>
                    <li><strong>Price:</strong> Rp {{ number_format($part->price, 2, ',', '.') }}</li>
                    <li><strong>Contact:</strong> {{ $part->contact }}</li>
                    <li><strong>Location:</strong> {{ $part->location }}</li>
                </ul>
            </div>

            <!-- Map Section (Optional) -->
            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-2xl font-semibold mb-2">Location</h2>
                <div class="w-full h-64 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{ urlencode($part->location) }}&output=embed"></iframe>
                </div>
            </div>

            <!-- Contact or Purchase Section -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('parts.index') }}" class="bg-gray-300 text-gray-800 hover:bg-gray-400 px-6 py-2 rounded-lg inline-block">Back to Parts</a>
                <a href="mailto:{{ $part->contact }}" class="bg-blue-500 text-white hover:bg-blue-600 px-6 py-2 rounded-lg inline-block">Contact for Purchase</a>
            </div>
        </div>
    </div>
</div>
@endsection