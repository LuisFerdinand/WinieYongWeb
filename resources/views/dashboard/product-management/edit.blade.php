@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <!-- Display error messages -->
    @if ($errors->any())
    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('product-management.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" value="{{ old('name', $product->name) }}" required oninput="generateSlug()">
            </div>

            <input type="hidden" name="slug" id="slug" value="{{ old('slug', $product->slug) }}">

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="model_number" class="block text-gray-700">Model Number</label>
                <input type="text" name="model_number" id="model_number" class="w-full px-4 py-2 border rounded-lg" value="{{ old('model_number', $product->model_number) }}">
            </div>

            <div class="mb-4">
                <label for="power_output" class="block text-gray-700">Power Output</label>
                <input type="number" name="power_output" id="power_output" class="w-full px-4 py-2 border rounded-lg" step="0.01" value="{{ old('power_output', $product->power_output) }}">
            </div>

            <div class="mb-4">
                <label for="dimensions" class="block text-gray-700">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="w-full px-4 py-2 border rounded-lg" maxlength="255" value="{{ old('dimensions', $product->dimensions) }}">
            </div>

            <div class="mb-4">
                <label for="fuel_type" class="block text-gray-700">Fuel Type</label>
                <input type="text" name="fuel_type" id="fuel_type" class="w-full px-4 py-2 border rounded-lg" maxlength="255" value="{{ old('fuel_type', $product->fuel_type) }}">
            </div>

            <div class="mb-4">
                <label for="usage_instructions" class="block text-gray-700">Usage Instructions</label>
                <textarea name="usage_instructions" id="usage_instructions" class="w-full px-4 py-2 border rounded-lg" rows="4">{{ old('usage_instructions', $product->usage_instructions) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg" accept="image/*" onchange="previewImage(event)">
            </div>

            @if($product->image_url)
            <div class="mb-4">
                <label class="block text-gray-700">Current Image</label>
                <img src="{{ asset('storage/' . $product->image_url) }}" id="currentImage" alt="{{ $product->name }}" class="mt-2 w-32 h-32 object-cover">
            </div>
            @endif

            <div class="mb-4">
                <label class="block text-gray-700">New Image Preview</label>
                <img id="imagePreview" src="#" alt="Image Preview" class="mt-2 w-32 h-32 object-cover hidden">
            </div>

            <div class="mb-4">
                <label for="power_output" class="block text-gray-700">Power Output</label>
                <input type="number" name="power_output" id="power_output" class="w-full px-4 py-2 border rounded-lg" value="{{ $product->power_output }}">
            </div>

            <div class="mb-4">
                <label for="dimensions" class="block text-gray-700">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="w-full px-4 py-2 border rounded-lg" value="{{ $product->dimensions }}" maxlength="255">
            </div>

            <div class="mb-4">
                <label for="fuel_type" class="block text-gray-700">Fuel Type</label>
                <input type="text" name="fuel_type" id="fuel_type" class="w-full px-4 py-2 border rounded-lg" value="{{ $product->fuel_type }}" maxlength="255">
            </div>

            <div class="mb-4">
                <label for="usage_instructions" class="block text-gray-700">Usage Instructions</label>
                <textarea name="usage_instructions" id="usage_instructions" class="w-full px-4 py-2 border rounded-lg" rows="4">{{ $product->usage_instructions }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Product</button>
                <a href="{{ route('product-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];
        const preview = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden'); // Show the preview
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#'; // Reset preview
            preview.classList.add('hidden'); // Hide the preview if no file is selected
        }
    }

    function generateSlug() {
        const nameInput = document.getElementById('name');
        const slugInput = document.getElementById('slug');
        const slug = nameInput.value
            .toLowerCase()
            .replace(/\s+/g, '-') // Replace spaces with -
            .replace(/[^\w\-]+/g, '') // Remove all non-word chars
            .replace(/\-\-+/g, '-') // Replace multiple - with single -
            .replace(/^-+/, '') // Trim - from start
            .replace(/-+$/, ''); // Trim - from end
        slugInput.value = slug;
    }

    // Call generateSlug on load to initialize the slug value for editing
    document.addEventListener('DOMContentLoaded', function() {
        generateSlug();
    });
</script>
@endsection