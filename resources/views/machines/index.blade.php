@extends('layouts.app')

@section('title', 'Machines List')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-3xl font-bold">Machines List</h1>
    <a href="{{ route('machines.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Machine</a>
</div>

<!-- Machine Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($machines as $machine)
    <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-2">{{ $machine->name }}</h2>
        <p class="text-gray-700">Category: {{ $machine->category }}</p>
        <p class="text-gray-700">Price: ${{ number_format($machine->price, 2) }}</p>
        <p class="text-gray-700">Location: {{ $machine->location }}</p>
        <p class="text-gray-700">Year: {{ $machine->year_of_manufacture }}</p>

        <div class="mt-4">
            <a href="{{ route('machines.edit', $machine) }}" class="text-blue-500 hover:underline">Edit</a>
            <form action="{{ route('machines.destroy', $machine) }}" method="POST" class="inline-block ml-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection