@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-8 mt-20">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ $part->image_url }}" class="w-full h-96 object-cover" alt="{{ $part->name }}">
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-4">{{ $part->name }}</h1>
            <p class="text-lg text-gray-700 mb-6">{{ $part->description }}</p>

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

            <!-- Contact or Purchase Section -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('parts.index') }}" class="bg-gray-300 text-gray-800 hover:bg-gray-400 px-6 py-2 rounded-lg inline-block">Back to Parts</a>
                <a href="mailto:{{ $part->contact }}" class="bg-blue-500 text-white hover:bg-blue-600 px-6 py-2 rounded-lg inline-block">Contact for Purchase</a>
            </div>
        </div>
    </div>
</div>
@endsection