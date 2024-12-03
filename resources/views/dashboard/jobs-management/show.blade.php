@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">{{ $job->title }}</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <strong>Description:</strong>
            <p>{{ $job->description }}</p>
        </div>
        <div class="mb-4">
            <strong>Salary:</strong>
            <p>Rp {{ number_format($job->salary, 2) }}</p>
        </div>
        <div class="mb-4">
            <strong>Category:</strong>
            <p>{{ $job->category }}</p>
        </div>
        <div class="mb-4">
            <strong>Status:</strong>
            <p>{{ $job->status == 'open' ? 'Open' : 'Closed' }}</p>
        </div>
        <div class="mb-4">
            <strong>Application Deadline:</strong>
            <p>{{ $job->application_deadline ? $job->application_deadline->format('Y-m-d') : 'N/A' }}</p>
        </div>
        @if($job->image_url)
        <div class="mb-4">
            <strong>Image:</strong>
            <img src="{{ asset('storage/' . $job->image_url) }}" alt="{{ $job->title }}" class="w-64 h-64 object-cover">
        </div>
        @endif
        <div class="mt-4">
            <a href="{{ route('job-management.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Back to Jobs</a>
        </div>
    </div>
</div>
@endsection