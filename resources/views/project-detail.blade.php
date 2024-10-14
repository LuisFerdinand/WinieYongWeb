@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto px-6 py-16">
    <h2 class="text-4xl font-bold mb-4">{{ $project->project_name }}</h2>
    <img src="{{ asset('storage/' . $project->project_image) }}" alt="{{ $project->project_name }}" class="w-full h-64 object-cover mb-6">

    <p class="text-gray-600 mb-4">{{ $project->project_description }}</p>
    <p class="text-gray-600 mb-4"><strong>Client:</strong> {{ $project->project_client }}</p>
    <p class="text-gray-600 mb-4"><strong>Status:</strong> {{ ucfirst($project->project_status) }}</p>
    <p class="text-gray-600 mb-4"><strong>Date:</strong> {{ $project->project_date->format('F d, Y') }}</p>

    @if($project->project_highlights)
    <h3 class="text-2xl font-semibold mb-2">Highlights</h3>
    <p class="text-gray-600">{{ $project->project_highlights }}</p>
    @endif

    <a href="{{ route('home') }}" class="mt-4 inline-block bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-800">Back to Projects</a>
</div>
@endsection