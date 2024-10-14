@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Edit Rental</h1>

    <form action="{{ route('rental-management.update', $rental->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Rental Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" value="{{ $rental->name }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required>{{ $rental->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price (Rupiah)</label>
                <input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-lg" step="0.01" value="{{ $rental->price }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <select name="category" id="category" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Apartment" {{ $rental->category == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                    <option value="House" {{ $rental->category == 'House' ? 'selected' : '' }}>House</option>
                    <option value="Condo" {{ $rental->category == 'Condo' ? 'selected' : '' }}>Condo</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="availability_status" class="block text-gray-700">Availability</label>
                <select name="availability_status" id="availability_status" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $rental->availability_status ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ !$rental->availability_status ? 'selected' : '' }}>Not Available</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="available_from" class="block text-gray-700">Available From</label>
                <input type="date" name="available_from" id="available_from" class="w-full px-4 py-2 border rounded-lg" value="{{ $rental->available_from ? $rental->available_from->format('Y-m-d') : '' }}">
            </div>

            <div class="mb-4">
                <label for="available_to" class="block text-gray-700">Available To</label>
                <input type="date" name="available_to" id="available_to" class="w-full px-4 py-2 border rounded-lg" value="{{ $rental->available_to ? $rental->available_to->format('Y-m-d') : '' }}">
            </div>

            <div class="mb-4">
                <label for="current_image" class="block text-gray-700">Current Image</label>
                @if($rental->image_url)
                <img id="currentImage" src="{{ asset('storage/' . $rental->image_url) }}" alt="{{ $rental->name }}" class="w-32 h-32 object-cover mb-4">
                @else
                <p class="text-gray-500">No image available</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Upload New Image</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg" accept="image/*">
            </div>

            <div class="mb-4">
                <img id="previewImage" class="hidden w-32 h-32 object-cover mb-4">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Rental</button>
                <a href="{{ route('rental-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('image_url').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById('previewImage');
                previewImage.src = e.target.result;
                previewImage.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection