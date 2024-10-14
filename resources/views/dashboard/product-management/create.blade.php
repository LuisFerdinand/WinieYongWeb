@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>

    <form action="{{ route('product-management.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
<<<<<<< HEAD
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required oninput="generateSlug()">
            </div>

            <input type="hidden" name="slug" id="slug">

=======
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

>>>>>>> origin/Rental
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
            </div>

            <div class="mb-4">
<<<<<<< HEAD
=======
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-lg" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-gray-700">Stock</label>
                <input type="number" name="stock" id="stock" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <input type="text" name="category" id="category" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
>>>>>>> origin/Rental
                <label for="model_number" class="block text-gray-700">Model Number</label>
                <input type="text" name="model_number" id="model_number" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
<<<<<<< HEAD
                <label for="power_output" class="block text-gray-700">Power Output</label>
                <input type="number" name="power_output" id="power_output" class="w-full px-4 py-2 border rounded-lg" step="0.01">
            </div>

            <div class="mb-4">
                <label for="dimensions" class="block text-gray-700">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="w-full px-4 py-2 border rounded-lg" maxlength="255">
            </div>

            <div class="mb-4">
                <label for="fuel_type" class="block text-gray-700">Fuel Type</label>
                <input type="text" name="fuel_type" id="fuel_type" class="w-full px-4 py-2 border rounded-lg" maxlength="255">
            </div>

            <div class="mb-4">
                <label for="usage_instructions" class="block text-gray-700">Usage Instructions</label>
                <textarea name="usage_instructions" id="usage_instructions" class="w-full px-4 py-2 border rounded-lg" rows="4"></textarea>
=======
                <label for="specifications" class="block text-gray-700">Specifications</label>
                <textarea name="specifications" id="specifications" class="w-full px-4 py-2 border rounded-lg" rows="4"></textarea>
>>>>>>> origin/Rental
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
<<<<<<< HEAD
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg" required accept="image/*" onchange="previewImage(event)">
            </div>

            <div class="mb-4">
                <img id="image-preview" class="mt-4 hidden" src="" alt="Image Preview" style="max-width: 200px; border-radius: 8px;">
=======
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg">
>>>>>>> origin/Rental
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Product</button>
                <a href="{{ route('product-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
<<<<<<< HEAD

<script>
    function previewImage(event) {
        const preview = document.getElementById('image-preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
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
</script>
=======
>>>>>>> origin/Rental
@endsection