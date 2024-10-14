@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    @if ($errors->any())
    <div class="mb-6">
        <div class="bg-red-500 text-white px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Project</h1>

    <form action="{{ route('project-management.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Project Name</label>
            <input type="text" name="project_name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('project_name') }}" required>
        </div>

        <div class="mb-6">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="project_description" id="description" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('project_description') }}</textarea>
        </div>

        <div class="mb-6">
            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Project Date</label>
            <input type="date" name="project_date" id="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('project_date') }}" required>
        </div>

        <div class="mb-6">
            <label for="client" class="block text-gray-700 text-sm font-bold mb-2">Client</label>
            <input type="text" name="project_client" id="client" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('project_client') }}" required>
        </div>

        <div class="mb-6">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <select name="project_status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>Select Status</option>
                <option value="ongoing" {{ old('project_status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="completed" {{ old('project_status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="pending" {{ old('project_status') == 'pending' ? 'selected' : '' }}>Pending</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="highlights" class="block text-gray-700 text-sm font-bold mb-2">Highlights</label>
            <textarea name="project_highlights" id="highlights" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('project_highlights') }}</textarea>
        </div>

        <div class="mb-6">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Project Image</label>
            <input type="file" name="project_image" id="image" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <img id="imagePreview" class="mt-2 w-full h-auto rounded-lg" style="display:none;" />
        </div>

        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Save Project
        </button>
    </form>
</div>

<script>
    // Preview image before upload
    document.getElementById('image').addEventListener('change', function(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection