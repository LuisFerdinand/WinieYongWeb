@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative bg-cover bg-center h-screen text-white" style="background-image: url('https://plus.unsplash.com/premium_photo-1677682551132-586778bbe520?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative max-w-[1440px] container mx-auto h-full flex flex-col justify-center items-center text-center md:text-left md:items-start p-6">
        <p class="text-teal-600 font-bold mb-0">|<span> Sambas Perkasa Jaya</span></p>
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Powering Your Projects <br>with Precision</h1>
        <p class="md:text-xl mb-6">Leading provider of heavy machinery and equipment for construction and industry</p>
        <a href="{{ route('contact') }}" class="bg-yellow-500 text-gray-900 hover:bg-yellow-400 px-6 py-3 rounded-lg text-lg font-semibold">Get in Touch</a>
    </div>
</section>

<section class="flex flex-col md:flex-row justify-center max-w-[1440px] mx-auto h-screen items-center px-6">
    <div class="relative flex flex-col items-center md:w-1/2 my-10">
        <img src="img/nobg.png" width="800" alt="hartanto">
        <div class="bg-gray-900 rounded-2xl py-2 px-12 absolute -bottom-4">
            <h3 class="text-white text-2xl md:text-4xl font-bold">Mr. Hartanto</h3>
        </div>
    </div>
    <div class="flex flex-col md:w-1/2 text-center md:text-left">
        <p class="text-teal-600 font-bold mb-0">|<span> Founder</span></p>
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Greeting</h1>
        <h3 class="text-lg md:text-xl lg:text-2xl italic text-gray-700 mb-4">"Success comes from precision, perseverance, and always staying true to your vision."</h3>
        <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-2">Founder & CEO</h2>
        <p class="text-base md:text-lg lg:text-xl text-gray-600">Mr. Hartanto has over 30 years of experience in the heavy machinery industry, committed to delivering quality and reliability in every project.</p>
    </div>
</section>

<section id="accordion-section" class="max-w-[1440px] mx-auto my-8 px-2">
    <!-- Section Title -->
    <p class="text-teal-600 text-center font-bold mb-0">|<span> Benefit</span></p>
    <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">Why Choose Us</h1>

    <!-- Accordion Item 1 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse1">
                High-Quality Equipment
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse1" class="accordion-body hidden px-5 py-4">
            Our heavy machinery is sourced from industry-leading manufacturers, ensuring durability and reliability in even the toughest environments. We prioritize quality to ensure your projects run smoothly.
        </div>
    </div>

    <!-- Accordion Item 2 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse2">
                Expert Support and Service
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse2" class="accordion-body hidden px-5 py-4">
            Our team of experts offers 24/7 customer support, ensuring that any issues you encounter are addressed quickly. We also provide comprehensive training and maintenance services to maximize your equipment's uptime.
        </div>
    </div>

    <!-- Accordion Item 3 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse3">
                Cost-Effective Solutions
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse3" class="accordion-body hidden px-5 py-4">
            We offer flexible financing and leasing options to help you manage your budget while accessing top-of-the-line machinery. Our competitive pricing ensures you get the best value for your investment.
        </div>
    </div>

    <!-- Accordion Item 4 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse4">
                Industry Experience
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse4" class="accordion-body hidden px-5 py-4">
            With over 20 years of experience in the heavy machinery industry, we understand the unique challenges faced by businesses. Our expertise allows us to provide tailored solutions to meet your specific needs.
        </div>
    </div>

    <!-- Accordion Item 5 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse5">
                Safety and Compliance
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse5" class="accordion-body hidden px-5 py-4">
            We prioritize safety by ensuring our machines comply with the latest industry regulations. All equipment undergoes rigorous testing, ensuring they meet safety standards and minimize risks on-site.
        </div>
    </div>

    <!-- Accordion Item 6 -->
    <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-lg mb-2">
        <h2 class="accordion-header mb-0">
            <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-white border-0 transition-transform duration-200 ease-in-out hover:bg-gray-100 focus:outline-none"
                type="button" aria-expanded="false" aria-controls="accordion-collapse6">
                Eco-Friendly Technologies
                <span class="accordion-icon transition-transform duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="accordion-collapse6" class="accordion-body hidden px-5 py-4">
            Our commitment to sustainability means that our machinery incorporates the latest eco-friendly technologies. We strive to reduce environmental impact while maintaining high performance, helping you meet your green goals.
        </div>
    </div>




</section>

<style>
    .accordion-button[aria-expanded="true"] .accordion-icon {
        transform: rotate(180deg);
    }
</style>

<section class="bg-gray-100 py-16">
    <div class="max-w-[1440px] mx-auto px-6">
        <p class="text-teal-600 text-center font-bold mb-0">|<span> Testimonials</span></p>
        <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">What Our Clients Say</h1>
        <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-lg italic">"Sambas Perkasa Jaya has been our trusted partner for years. Their equipment is top-notch, and their service is impeccable!"</p>
                <h3 class="text-xl font-bold mt-4">- Alex Smith, CEO of BuildIt Co.</h3>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-lg italic">"Their precision and commitment to quality have helped us complete projects on time and with outstanding results."</p>
                <h3 class="text-xl font-bold mt-4">- Sarah Lee, Project Manager at ConstructPro</h3>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-lg italic">"We rely on their expertise and equipment for every major project, and they always deliver beyond expectations."</p>
                <h3 class="text-xl font-bold mt-4">- John Doe, COO of UrbanBuilders Inc.</h3>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionButtons = document.querySelectorAll('.accordion-button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Toggle the aria-expanded attribute
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', !isExpanded);

                // Get the target collapse element
                const targetId = button.getAttribute('aria-controls');
                const targetElement = document.getElementById(targetId);

                // Toggle the visibility of the target element
                if (isExpanded) {
                    targetElement.classList.add('hidden');
                } else {
                    targetElement.classList.remove('hidden');
                }
            });
        });

        // const swiper = new Swiper('.swiper-container', {
        //     loop: true,
        //     pagination: {
        //         el: '.swiper-pagination',
        //         clickable: true,
        //     },
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },
        // });
    });
</script>




@endsection