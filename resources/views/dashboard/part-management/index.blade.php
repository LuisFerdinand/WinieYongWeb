@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Parts</h1>

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

    <a href="{{ route('part-management.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Add New Part</a>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price (Rp)</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Contact</th>
                    <th class="px-4 py-2">Location</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parts as $part)
                <tr>
                    <td class="border px-4 py-2">{{ $part->name }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($part->description, 100) }}</td>
                    <td class="border px-4 py-2">{{ number_format($part->price, 2) }}</td>
                    <td class="border px-4 py-2">{{ $part->category }}</td>
                    <td class="border px-4 py-2">{{ $part->contact }}</td>
                    <td class="border px-4 py-2">{{ $part->location }}</td>
                    <td class="border px-4 py-2">
                        @if($part->image_url)
                        <img src="{{ asset('storage/' . $part->image_url) }}" alt="{{ $part->name }}" class="w-16 h-16 object-cover">
                        @else
                        <span class="text-gray-500">No image</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('part-management.edit', $part->id) }}" class="text-yellow-500 font-bold hover:text-yellow-300">Edit</a>
                        <form action="{{ route('part-management.destroy', $part->id) }}" method="POST" class="inline-block">
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
        $totalPages = ceil($totalParts / $perPage);
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