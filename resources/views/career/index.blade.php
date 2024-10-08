@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 py-28 ">
    <div class="text-center mb-12">
        <p class="text-teal-600 font-bold tracking-widest text-center">|<span> Career</span></p>
        <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 mb-6">Join Our Team</h1>
        <p class="text-base sm:text-lg text-gray-500">Explore exciting career opportunities and take the next step in your professional journey.</p>
    </div>

    @if($jobs->isEmpty())
    <div class="text-center mb-6">
        <p class="text-gray-500 text-lg">No open positions available at the moment.</p>
    </div>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10 mb-12">
        @foreach($jobs as $job)
        <div class="relative bg-white rounded-lg border shadow-lg transform hover:-translate-y-1 transition duration-300 ease-in-out overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-3">{{ $job->title }}</h2>
                <p class="text-sm text-teal-600 mb-1">{{ ucfirst($job->work_type) }}</p>
                <p class="text-gray-600 mb-4">{{ Str::limit($job->description, 100) }}</p>
                <p class="text-sm text-gray-600"><strong>Total Positions:</strong> {{ $job->total_positions }}</p>

                <hr class="my-4 border-t border-gray-300">

                <a href="{{ route('career.show', $job->id) }}" class="block w-full text-center text-white bg-teal-600 py-2 rounded-md font-semibold hover:bg-teal-700 transition duration-200">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Additional Section -->
    <div class="text-center my-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Work With Us?</h2>
        <p class="text-gray-600 mb-6">Join a dynamic team that values innovation and collaboration. We offer competitive salaries, great benefits, and opportunities for growth.</p>
        <a href="#" class="text-white bg-teal-600 hover:bg-teal-700 px-6 py-3 rounded-md transition duration-200">Apply Now</a>
    </div>
</div>
@endsection