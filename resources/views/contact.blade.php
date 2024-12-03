@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="min-h-screen md:mt-10 py-32 lg:py-20 flex items-center justify-center">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="lg:flex">
                <!-- Contact Information -->
                <div class="lg:w-1/2 bg-teal-600 text-white p-12 lg:p-16 flex flex-col justify-between" data-aos="fade-right" data-aos-delay="100">
                    <div>
                        <p class="text-teal-100 tracking-widest font-bold mb-0">|<span> Partners</span></p>
                        <h2 class="text-3xl font-bold">Contact Information</h2>
                        <p class="mt-4 text-lg">We'd love to hear from you. Reach out to us using the information below or send us a message.</p>

                        <dl class="mt-8 space-y-6">
                            <dt class="sr-only">Address</dt>
                            <dd class="flex items-center">
                                <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                1234 Street, City, Country
                            </dd>

                            <dt class="sr-only">Phone number</dt>
                            <dd class="flex items-center">
                                <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +62 822-5683-1863
                            </dd>

                            <dt class="sr-only">Email</dt>
                            <dd class="flex items-center">
                                <svg class="h-6 w-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                pt.sambaskaryaperkasa@gmail.com
                            </dd>
                        </dl>
                    </div>

                    <div class="mt-12" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-xl font-semibold mb-4">Connect with us</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=61551899050491" class="text-white hover:text-teal-200" target="blank">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/skp_sunward/" class="text-white hover:text-teal-200" target="blank">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.023.047 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.467-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.047-1.023.058-1.351.058-3.807v-.468c0-2.456-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857-.182-.466-.399-.8-.748-1.15-.35-.35-.683-.566-1.15-.748-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.548a4.387 4.387 0 110-8.774 4.387 4.387 0 010 8.774z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:w-1/2 bg-white p-12 lg:p-16">
                    <h3 class="text-2xl font-semibold mb-8" data-aos="fade-left" data-aos-delay="300">Send Us a Message</h3>
                    @if (session('success'))
                    <div class="p-4 mb-4 text-green-800 bg-green-200 rounded">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="p-4 mb-4 text-red-800 bg-red-200 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" data-aos="fade-left" data-aos-delay="400">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <input type="text" name="first-name" id="first-name" placeholder="First Name" class="w-full p-3 border border-gray-300 rounded-md">
                            <input type="text" name="last-name" id="last-name" placeholder="Last Name" class="w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="mt-6">
                            <input type="email" name="email" id="email" placeholder="Email Address" class="w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="mt-6">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="w-full p-3 border border-gray-300 rounded-md">
                        </div>
                        <div class="mt-6">
                            <textarea name="message" id="message" rows="4" placeholder="Your Message" class="w-full p-3 border border-gray-300 rounded-md"></textarea>
                        </div>
                        <button type="submit" class="mt-8 py-3 px-8 bg-teal-600 text-white rounded-md hover:bg-teal-700" data-aos="fade-left" data-aos-delay="500">Send Message</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection