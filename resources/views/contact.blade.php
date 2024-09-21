@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="bg-gray-100 h-screen mt-20">
    <div class="max-w-[1440px] mx-auto px-6">
        <div class="text-center mb-12">
            <p class="text-teal-600 font-bold mb-0">|<span> Contact Us</span></p>
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Get In Touch</h1>
            <p class="md:text-xl text-gray-600">We'd love to hear from you. Whether you have a question, concern, or just want to chat!</p>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Contact Info -->
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                <h3 class="text-2xl font-semibold mb-4">Contact Information</h3>
                <p class="text-lg mb-6">Feel free to reach out to us using the contact information below or fill out the form.</p>
                <ul>
                    <li class="mb-4">
                        <span class="font-bold">Address:</span> 1234 Street, City, Country
                    </li>
                    <li class="mb-4">
                        <span class="font-bold">Phone:</span> +123 456 7890
                    </li>
                    <li class="mb-4">
                        <span class="font-bold">Email:</span> contact@company.com
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="md:w-1/2 bg-white p-8 rounded-lg shadow-lg">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-600" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-600" required>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-600" required>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-600" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-teal-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-teal-500 focus:outline-none">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection