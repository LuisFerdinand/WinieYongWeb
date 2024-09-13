@extends('layouts.app')

@section('title', ucfirst($type))

@section('content')
<section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">{{ ucfirst($type) }}</h2>
        <p class="text-lg mb-6">Detailed information about {{ $type }} services.</p>
        <!-- Add service details here -->
    </div>
</section>
@endsection