@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Rentals</h1>

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

    <a href="{{ route('rental-management.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Add New Rental</a>

    <!-- Search Form -->
    <form method="GET" action="{{ route('rental-management.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search rentals..." value="{{ $search }}" class="px-4 py-2 border rounded-lg">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Search</button>
        <a href="{{ route('rental-management.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded-lg">Reset</a>
    </form>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price (Rp)</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Available From</th>
                    <th class="px-4 py-2">Available To</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rentals as $rental)
                <tr>
                    <td class="border px-4 py-2">{{ $rental->name }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($rental->description, 100) }}</td>
                    <td class="border px-4 py-2">{{ number_format($rental->price, 2) }}</td>
                    <td class="border px-4 py-2">{{ $rental->category }}</td>
                    <td class="border px-4 py-2">{{ $rental->available_from ? $rental->available_from->format('Y-m-d') : 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $rental->available_to ? $rental->available_to->format('Y-m-d') : 'N/A' }}</td>
                    <td class="border px-4 py-2">
                        @if($rental->availability_status)
                        <span class="bg-green-500 text-white px-2 py-1 rounded">Available</span>
                        @else
                        <span class="bg-red-500 text-white px-2 py-1 rounded">Unavailable</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if($rental->image_url)
                        <img src="{{ asset('storage/' . $rental->image_url) }}" alt="{{ $rental->name }}" class="w-16 h-16 object-cover">
                        @else
                        <span class="text-gray-500">No image</span>
                        @endif
                    </td>

                    <td class="border px-4 py-2">
                        <a href="{{ route('rental-management.edit', $rental->id) }}" class="text-yellow-500 font-bold hover:text-yellow-300">Edit</a>
                        <form action="{{ route('rental-management.destroy', $rental->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 font-bold hover:text-red-300">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center py-4">No rentals found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Custom Pagination Links -->
    <div class="mt-4 flex justify-center">
        @php
        $totalPages = ceil($totalRentals / $perPage);
        @endphp

        @if ($currentPage > 1)
        <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}&search={{ $search }}" class="px-3 py-1 bg-gray-200 rounded">Previous</a>
        @endif

        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url()->current() }}?page={{ $i }}&search={{ $search }}" class="px-3 py-1 mx-1 {{ $currentPage == $i ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">{{ $i }}</a>
            @endfor

            @if ($currentPage < $totalPages)
                <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}&search={{ $search }}" class="px-3 py-1 bg-gray-200 rounded">Next</a>
                @endif
    </div>
</div>
@endsection