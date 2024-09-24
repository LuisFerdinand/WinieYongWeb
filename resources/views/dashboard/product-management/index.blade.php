@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Products</h1>

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

    <a href="{{ route('product-management.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Add New Product</a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Model Number</th>
                    <th class="px-4 py-2">Specifications</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($product->description, 100) }}</td>
                    <td class="border px-4 py-2">{{ number_format($product->price, 2) }}</td>
                    <td class="border px-4 py-2">{{ $product->stock }}</td>
                    <td class="border px-4 py-2">{{ $product->category ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $product->model_number ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($product->specifications, 100) ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">
                        @if($product->image_url)
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover">
                        @else
                        <span class="text-gray-500">No image</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('product-management.edit', $product->id) }}" class="text-yellow-500 font-bold hover:text-yellow-300">Edit</a>
                        <form action="{{ route('product-management.destroy', $product->id) }}" method="POST" class="inline-block">
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
        $totalPages = ceil($totalProducts / $perPage);
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