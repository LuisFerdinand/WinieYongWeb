@extends('layouts.app')

@section('title', 'Repair Services')

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-20 lg:px-6 min-h-screen flex flex-col">

    <p class="text-teal-600 text-center font-bold mb-2">|<span> Repair</span></p>
    <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Heavy Machinery Repair Services</h1>

    <!-- Introduction Section -->
    <div class="mb-12 text-center">
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            We specialize in comprehensive repair services for all types of heavy machinery. Whether it’s excavators, bulldozers, cranes, or loaders, our team of experts ensures your equipment is back in action quickly, efficiently, and safely.
        </p>
    </div>

    <!-- Marketing Section: Why Choose Us -->
    <div class="bg-teal-100 p-8 rounded-lg shadow-md mb-12 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Why Choose Our Heavy Machinery Repair Services?</h2>
        <p class="text-lg text-gray-600 mb-6">
            With over 10 years of experience in the industry, our team provides top-notch repair solutions tailored to your machinery's specific needs. We use the latest diagnostic tools and genuine parts to ensure your machines run like new.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Expert Technicians</h3>
                <p class="text-gray-600">Our certified technicians are highly skilled in repairing all types of heavy machinery.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Fast Turnaround</h3>
                <p class="text-gray-600">We prioritize quick service to minimize your downtime and get your machines back to work.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Genuine Parts</h3>
                <p class="text-gray-600">We only use high-quality, manufacturer-approved parts for all repairs to ensure longevity.</p>
            </div>
        </div>
    </div>

    <!-- Services List -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="/img/repair/excavator.jpg" alt="Excavator Repair" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Excavator Repair</h3>
            <p class="text-gray-600 mb-4">Full-service repair and maintenance for all types of excavators, from hydraulic systems to engine overhauls.</p>
            <a href="{{ route('contact') }}" class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md inline-block">Contact Us</a>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="/img/repair/bulldozer.jpg" alt="Bulldozer Repair" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Bulldozer Repair</h3>
            <p class="text-gray-600 mb-4">Expert repairs for all bulldozer parts, including tracks, engines, and hydraulic systems.</p>
            <a href="{{ route('contact') }}" class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md inline-block">Contact Us</a>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="/img/repair/crane.jpg" alt="Crane Repair" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Crane Repair</h3>
            <p class="text-gray-600 mb-4">Specialized crane repair services, from structural repairs to hydraulic and electrical system maintenance.</p>
            <a href="{{ route('contact') }}" class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md inline-block">Contact Us</a>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="/img/repair/loader.jpg" alt="Loader Repair" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Loader Repair</h3>
            <p class="text-gray-600 mb-4">Comprehensive repair services for loaders, including transmission and hydraulic system repairs.</p>
            <a href="{{ route('contact') }}" class="text-white bg-teal-600 hover:bg-teal-700 px-4 py-2 rounded-md inline-block">Contact Us</a>
        </div>
    </div>

    <!-- Workshop Location with Map -->
    <div class="mt-16 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Visit Our Workshop</h2>
        <p class="text-lg text-gray-600 mb-6">Our workshop is located in Kalimantan Barat, offering easy access for your heavy machinery repair needs.</p>
        <div class="mb-8">
            <iframe class="w-full h-64 rounded-lg shadow-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198765.27950472827!2d109.2973!3d-0.0257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e01ce743eb11d8b%3A0xfab0f58b0d1a8f36!2sKalimantan%20Barat!5e0!3m2!1sen!2sid!4v1633512745836!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="mt-12 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Get in Touch</h2>
        <p class="text-lg text-gray-600 mb-6">Have any questions or need repair services? Contact us today to book an appointment!</p>
        <a href="/contact" class="text-white bg-teal-600 hover:bg-teal-700 px-6 py-3 rounded-lg inline-block">Contact Us Now</a>
    </div>
</div>
@endsection