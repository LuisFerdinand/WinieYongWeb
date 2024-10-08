@extends('layouts.app')

@section('content')
<div class="min-h-screen py-36 ">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $project->project_image) }}" alt="{{ $project->project_name }}" class="w-full h-auto object-cover">

            <div class="p-8">
                <h1 class="text-4xl font-bold text-teal-800 mb-4">{{ $project->project_name }}</h1>

                <div class="mb-6">
                    <p class="text-gray-600 leading-relaxed">{{ $project->project_description }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-teal-100 p-4 rounded">
                        <p class="text-teal-800"><span class="font-semibold">Client:</span> {{ $project->project_client }}</p>
                    </div>
                    <div class="bg-teal-100 p-4 rounded">
                        <p class="text-teal-800"><span class="font-semibold">Status:</span> {{ ucfirst($project->project_status) }}</p>
                    </div>
                    <div class="bg-teal-100 p-4 rounded">
                        <p class="text-teal-800"><span class="font-semibold">Date:</span> {{ $project->project_date->format('F d, Y') }}</p>
                    </div>
                </div>

                @if($project->project_highlights)
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-teal-800 mb-2">Highlights</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $project->project_highlights }}</p>
                </div>
                @endif

                <div class="text-center">
                    <a href="{{ route('home') }}" class="inline-block bg-teal-600 text-white px-6 py-3 rounded-full hover:bg-teal-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                        Back to Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
@endpush