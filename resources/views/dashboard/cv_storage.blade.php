@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-4">CV Storage</h1>

    <!-- Display CVs -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">File Name</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $cvDirectory = storage_path('app/public/cvs');
                $cvs = \File::exists($cvDirectory) ? \File::files($cvDirectory) : [];
                @endphp

                @if(count($cvs) > 0)
                @foreach($cvs as $cv)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ basename($cv) }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form action="{{ route('cvs.destroy', basename($cv)) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this CV?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="2" class="border border-gray-300 px-4 py-2 text-center">No CVs found</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection