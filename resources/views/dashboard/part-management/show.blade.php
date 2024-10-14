@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">{{ $part->name }}</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <strong>Description:</strong>
            <p>{{ $part->description }}</p>
        </div>
        <div class="mb-4">
            <strong>Price:</strong>
            <p>Rp {{ number_format($part->price, 2) }}</p>
        </div>
        <div class="mb-4">
            <strong>Category:</strong>
            <p>{{ $part->category }}</p>
        </div>
        <div class="mb-4">
            <strong>Contact:</strong>
            <p>{{ $part->contact }}</p>
        </div>
        <div class="mb-4">
            <strong>Location:</strong>
            <p>{{ $part->location }}</p>
        </div>
        @if($part->image_url)
        <div class="mb-4">
            <strong>Image:</strong>
            <img src="{{ $part->image_url }}" alt="{{ $part->name }}" class="w-64 h-64 object-cover">
        </div>
        @endif
        <div class="mt-4">
            <a href="{{ route('part-management.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Back to Parts</a>
        </div>
    </div>
</div>
@endsection