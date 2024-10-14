@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Jobs</h1>

    @if(session('success'))
    <div class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-500 text-white px-4 py-2 rounded-lg mb-4">
        {{ session('error') }}
    </div>
    @endif

    <a href="{{ route('job-management.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Add New Job</a>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Position</th>
                    <th class="px-4 py-2">Work Type</th>
                    <th class="px-4 py-2">Total Positions</th>
                    <th class="px-4 py-2">Requirements</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td class="border px-4 py-2">{{ $job->title }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($job->description, 100) }}</td>
                    <td class="border px-4 py-2">{{ $job->position }}</td>
                    <td class="border px-4 py-2">
                        {{ $job->work_type === 'remote' ? 'Remote' : 'On-site' }}
                    </td>
                    <td class="border px-4 py-2">{{ $job->total_positions }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($job->requirements, 100) }}</td>
                    <td class="border px-4 py-2">
                        @if($job->status === 'open')
                        <span class="bg-green-500 text-white px-2 py-1 rounded">Open</span>
                        @else
                        <span class="bg-red-500 text-white px-2 py-1 rounded">Closed</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('job-management.edit', $job->id) }}" class="text-yellow-500 font-bold hover:text-yellow-300">Edit</a>
                        <form action="{{ route('job-management.destroy', $job->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 font-bold hover:text-red-300">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Custom Pagination Links -->
    <div class="mt-4 flex justify-center">
        @php
        $totalPages = ceil($totalJobs / $perPage);
        @endphp

        @if ($currentPage > 1)
        <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}" class="px-3 py-1 bg-gray-200 rounded">Previous</a>
        @endif

        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url()->current() }}?page={{ $i }}" class="px-3 py-1 mx-1 {{ $currentPage == $i ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">{{ $i }}</a>
            @endfor

            @if ($currentPage < $totalPages)
                <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}" class="px-3 py-1 bg-gray-200 rounded">Next</a>
                @endif
    </div>
</div>
@endsection