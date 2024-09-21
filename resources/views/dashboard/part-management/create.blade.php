@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Add New Part</h1>

    <form action="{{ route('part-management.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Part Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price (Rupiah)</label>
                <input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-lg" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <select name="category" id="category" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="Electronics">Electronics</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Tools">Tools</option>
                    <option value="Accessories">Accessories</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="contact" class="block text-gray-700">Contact</label>
                <input type="text" name="contact" id="contact" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Part</button>
                <a href="{{ route('part-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection