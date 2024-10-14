@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Edit Job</h1>

    <form action="{{ route('job-management.update', $job->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Job Title</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg" value="{{ $job->title }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required>{{ $job->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="position" class="block text-gray-700">Position</label>
                <input type="text" name="position" id="position" class="w-full px-4 py-2 border rounded-lg" value="{{ $job->position }}" required>
            </div>

            <div class="mb-4">
                <label for="work_type" class="block text-gray-700">Work Type</label>
                <select name="work_type" id="work_type" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="remote" {{ $job->work_type == 'remote' ? 'selected' : '' }}>Remote</option>
                    <option value="on-site" {{ $job->work_type == 'on-site' ? 'selected' : '' }}>On-site</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="total_positions" class="block text-gray-700">Total Positions</label>
                <input type="number" name="total_positions" id="total_positions" class="w-full px-4 py-2 border rounded-lg" value="{{ $job->total_positions }}" required>
            </div>

            <div class="mb-4">
                <label for="requirements" class="block text-gray-700">Requirements</label>
                <textarea name="requirements" id="requirements" class="w-full px-4 py-2 border rounded-lg" rows="4" required>{{ $job->requirements }}</textarea>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select name="status" id="status" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="open" {{ $job->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="closed" {{ $job->status == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="application_deadline" class="block text-gray-700">Application Deadline</label>
                <input type="date" name="application_deadline" id="application_deadline" class="w-full px-4 py-2 border rounded-lg" value="{{ $job->application_deadline ? $job->application_deadline->format('Y-m-d') : '' }}">
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-4 py-2 border rounded-lg">
                @if($job->image_url)
                <img src="{{ asset('storage/' . $job->image_url) }}" alt="Job Image" class="mt-2 max-w-xs">
                @endif
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Job</button>
                <a href="{{ route('job-management.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection