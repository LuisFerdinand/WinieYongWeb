@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- About Us Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">About Us</h2>
        <p class="text-lg mb-6">Our company has been at the forefront of heavy machinery solutions, offering top-notch equipment and services to meet the demands of the construction and industrial sectors. With a rich history of innovation and excellence, we are committed to delivering quality and reliability.</p>
        <p class="text-lg mb-6">Founded in [Year], we have grown to become a leading provider of heavy machinery. Our team of experts is dedicated to ensuring that our customers receive the best possible support and service. We take pride in our work and strive to exceed expectations in everything we do.</p>
    </div>
</section>

<!-- Mission and Vision Section -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Our Mission and Vision</h2>
        <p class="text-lg mb-4">Our mission is to provide high-quality machinery and unparalleled service to our clients. We are committed to being a trusted partner in the success of your projects, offering reliable equipment and expert support.</p>
        <p class="text-lg">Our vision is to be the leading provider of heavy machinery, known for our innovation, customer focus, and commitment to excellence. We aim to set the standard for quality and service in the industry, continually improving and adapting to meet the evolving needs of our clients.</p>
    </div>
</section>

<!-- Meet the Team Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Meet Our Team</h2>
        <div class="flex flex-wrap justify-center">
            <!-- Team Member 1 -->
            <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('images/team-member1.jpg') }}" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('images/team-member2.jpg') }}" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-600">Operations Manager</p>
                </div>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </div>
</section>
@endsection