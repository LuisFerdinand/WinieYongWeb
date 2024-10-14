@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">{{ $rental->name }}</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <strong>Description:</strong>
            <p>{{ $rental->description }}</p>
        </div>
        <div class="mb-4">
            <strong>Price:</strong>
            <p>Rp {{ number_format($rental->price, 2) }}</p>
        </div>
        <div class="mb-4">
            <strong>Category:</strong>
            <p>{{ $rental->category }}</p>
        </div>
        <div class="mb-4">
            <strong>Availability:</strong>
            <p>{{ $rental->availability_status ? 'Available' : 'Not Available' }}</p>
        </div>
        <div class="mb-4">
            <strong>Available From:</strong>
            <p>{{ $rental->available_from ? $rental->available_from->format('Y-m-d') : 'N/A' }}</p>
        </div>
        <div class="mb-4">
            <strong>Available To:</strong>
            <p>{{ $rental->available_to ? $rental->available_to->format('Y-m-d') : 'N/A' }}</p>
        </div>
        @if($rental->image_url)
        <div class="mb-4">
            <strong>Image:</strong>
            <img src="{{ $rental->image_url }}" alt="{{ $rental->name }}" class="w-64 h-64 object-cover">
        </div>
        @endif
        <div class="mt-4">
            <a href="{{ route('rental-management.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Back to Rentals</a>
        </div>
    </div>
</div>
@endsection