@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Add New Job</h1>

    <form action="{{ route('job-management.store') }}" method="POST">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Job Title</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="position" class="block text-gray-700">Position</label>
                <input type="text" name="position" id="position" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="work_type" class="block text-gray-700">Work Type</label>
                <select name="work_type" id="work_type" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="remote">Remote</option>
                    <option value="on-site">On-site</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="total_positions" class="block text-gray-700">Total Positions</label>
                <input type="number" name="total_positions" id="total_positions" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="requirements" class="block text-gray-700">Requirements</label>
                <textarea name="requirements" id="requirements" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select name="status" id="status" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Job</button>
                <a href="{{ route('job-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection