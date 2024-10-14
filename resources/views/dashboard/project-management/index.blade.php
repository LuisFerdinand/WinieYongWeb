@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Project Management</h1>

    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
        <p class="font-bold">Success</p>
        <p>{{ session('success') }}</p>
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
        <p class="font-bold">Error</p>
        <p>{{ session('error') }}</p>
    </div>
    @endif

    <!-- Search Bar and Sort by Status -->
    <div class="flex justify-between items-center mb-6 space-y-4 md:space-y-0 md:flex-row">
        <form action="{{ route('project-management.index') }}" method="GET" class="flex items-center w-full md:w-1/2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search projects..."
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Search
            </button>
        </form>

        <!-- Dropdown Menu for Sorting by Status -->
        <form action="{{ route('project-management.index') }}" method="GET" class="w-full md:w-1/4">
            <input type="hidden" name="search" value="{{ request('search') }}">
            <select name="status" onchange="this.form.submit()"
                class="w-full bg-white border border-gray-300 px-4 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">All Statuses</option>
                @foreach(['In Progress', 'Completed', 'On Hold', 'Cancelled'] as $status)
                <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>{{ $status }}</option>
                @endforeach
            </select>
        </form>

        <a href="{{ route('project-management.create') }}"
            class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Add New Project
        </a>
    </div>

    <!-- Projects Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-500 text-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Project Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Client</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Highlights</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($projects as $project)
                <tr>
                    <td class="px-6 py-4">{{ $project->project_name }}</td>
                    <td class="px-6 py-4">{{ Str::limit($project->project_description, 100) }}</td>
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($project->project_date)->format('d/m/Y') }}</td>
                    <td class="px-6 py-4">
                        @if($project->project_image)
                        <img src="{{ asset('storage/' . $project->project_image) }}" alt="{{ $project->project_name }}" class="w-16 h-16 object-cover rounded-md">
                        @else
                        <span class="text-gray-500">No image</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">{{ $project->project_client ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $project->project_status ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ Str::limit($project->project_highlights, 100) ?? 'N/A' }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('project-management.edit', $project->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-3">Edit</a>
                        <form action="{{ route('project-management.destroy', $project->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-4 text-center text-gray-500">No projects found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        @php
        $totalPages = ceil($totalProjects / $perPage);
        @endphp

        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
            @if ($currentPage > 1)
            <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}&search={{ request('search') }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
            @endif

            @for ($i = 1; $i <= $totalPages; $i++)
                <a href="{{ url()->current() }}?page={{ $i }}&search={{ request('search') }}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium {{ $currentPage == $i ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' }}">
                {{ $i }}
                </a>
                @endfor

                @if ($currentPage < $totalPages)
                    <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}&search={{ request('search') }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    @endif
        </nav>
    </div>
</div>
@endsection