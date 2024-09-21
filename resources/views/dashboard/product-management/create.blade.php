@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>

    <form action="{{ route('product-management.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
            </div>

            <div class="mb-4">
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
                <label for="model_number" class="block text-gray-700">Model Number</label>
                <input type="text" name="model_number" id="model_number" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="specifications" class="block text-gray-700">Specifications</label>
                <textarea name="specifications" id="specifications" class="w-full px-4 py-2 border rounded-lg" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Product</button>
                <a href="{{ route('product-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection