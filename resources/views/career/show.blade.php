@extends('layouts.app')

@section('content')
<div class="max-w-[1440px] mx-auto min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 mt-32 ">
    <div class="text-center mb-12">
        <p class="text-teal-600 tracking-widest font-bold">|<span> Career</span></p>
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">{{ $job->title }}</h1>
        <p class="text-base sm:text-lg text-gray-500">Explore this exciting career opportunity.</p>
    </div>

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    @if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif

    <div class="w-full max-w-3xl bg-white rounded-lg border shadow-lg p-6 mb-10">
        <div class="mb-6">
            <p class="text-lg text-gray-700 mb-2"><strong class="font-medium">Position:</strong> {{ $job->position }}</p>
            <p class="text-lg text-gray-700 mb-2"><strong class="font-medium">Work Type:</strong> {{ ucfirst($job->work_type) }}</p>
            <p class="text-lg text-gray-700 mb-2"><strong class="font-medium">Total Positions:</strong> {{ $job->total_positions }}</p>
            <p class="text-lg text-gray-700 mb-4"><strong class="font-medium">Status:</strong> {{ ucfirst($job->status) }}</p>
        </div>

        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Job Description</h2>
        <p class="text-base text-gray-700 mb-10">{{ $job->description }}</p>

        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Requirements</h2>
        <p class="text-base text-gray-700 mb-10">{{ $job->requirements }}</p>

        @if($job->status === 'open')
        <div class="mt-10">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Apply for this Position</h2>
            <form action="{{ route('career.apply', $job->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm p-3" />
                </div>
                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age</label>
                    <input type="number" id="age" name="age" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm p-3" />
                </div>
                <div>
                    <label for="school" class="block text-sm font-medium text-gray-700 mb-2">School</label>
                    <input type="text" id="school" name="school" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm p-3" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm p-3" />
                </div>
                <div>
                    <label for="cv" class="block text-sm font-medium text-gray-700 mb-2">Upload CV</label>
                    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required class="w-full text-gray-500 border border-gray-300 rounded-md file:border file:border-gray-300 file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 focus:ring-teal-500 focus:border-teal-500 sm:text-sm p-3" />
                </div>
                <button type="submit" class="w-full py-3 bg-teal-600 text-white font-semibold rounded-lg shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">Submit Application</button>
            </form>
        </div>
        @else
        <p class="text-red-600 font-semibold mt-8">This position is closed.</p>
        @endif
    </div>
</div>
@endsection