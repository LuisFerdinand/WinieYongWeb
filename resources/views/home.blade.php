@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative bg-cover bg-center h-screen text-white" style="">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto h-full flex flex-col justify-center items-center text-center p-6">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Powering Your Projects with Precision</h1>
        <p class="text-lg md:text-2xl mb-6">Leading provider of heavy machinery and equipment for construction and industry</p>
        <a href="#contact" class="bg-yellow-500 text-gray-900 hover:bg-yellow-400 px-6 py-3 rounded-lg text-lg font-semibold">Get in Touch</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">About Us</h2>
        <p class="text-lg mb-4">We are dedicated to providing high-quality machinery and exceptional service to support your construction and industrial needs. Our team is committed to excellence and customer satisfaction.</p>
        <p class="text-lg">With decades of experience in the industry, we offer a wide range of equipment and services tailored to meet your specific requirements. Whether you need machinery for a large-scale project or maintenance services, we have you covered.</p>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-lg mb-6">Contact us today to discuss your project needs or schedule a consultation. We are here to help you every step of the way.</p>
        <a href="#contact" class="bg-yellow-500 text-gray-900 hover:bg-yellow-400 px-6 py-3 rounded-lg text-lg font-semibold">Contact Us</a>
    </div>
</section>
@endsection