@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Product Management</h1>

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

    <!-- Search Bar -->
    <form action="{{ route('product-management.index') }}" method="GET" class="mb-6">
        <div class="flex items-center">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..."
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Search
            </button>
        </div>
    </form>

    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('product-management.create') }}"
            class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150 ease-in-out">
            Add New Product
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-500 text-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Description</th>
<<<<<<< HEAD
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Image</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Model Number</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Power Output</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Dimensions</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fuel Type</th>
=======
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Price</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Category</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Model Number</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Specifications</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Image</th>
>>>>>>> origin/Rental
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                    <td class="px-6 py-4">{{ Str::limit($product->description, 100) }}</td>
<<<<<<< HEAD
=======
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->stock }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->category ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->model_number ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ Str::limit($product->specifications, 100) ?? 'N/A' }}</td>
>>>>>>> origin/Rental
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($product->image_url)
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover rounded-md">
                        @else
                        <span class="text-gray-500">No image</span>
                        @endif
                    </td>
<<<<<<< HEAD
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->model_number ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->power_output ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->dimensions ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->fuel_type ?? 'N/A' }}</td>
=======
>>>>>>> origin/Rental
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('product-management.edit', $product->id) }}" class="font-bold text-yellow-600 hover:text-yellow-900 mr-3">Edit</a>
                        <form action="{{ route('product-management.destroy', $product->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-bold" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
<<<<<<< HEAD
                    <td colspan="10" class="px-6 py-4 text-center text-gray-500">No products found.</td>
=======
                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">No products found.</td>
>>>>>>> origin/Rental
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Custom Pagination Links -->
    <div class="mt-6 flex justify-center">
        @php
        $totalPages = ceil($totalProducts / $perPage);
        @endphp

        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            @if ($currentPage > 1)
            <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}&search={{ request('search') }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <!-- Heroicon name: solid/chevron-left -->
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
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    @endif
        </nav>
    </div>
</div>
@endsection