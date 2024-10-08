@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative bg-cover bg-center h-screen text-white" style="background-image: url('https://images.unsplash.com/photo-1523848309072-c199db53f137?');">
    <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black opacity-80"></div>
    <div class="relative max-w-[1440px] container mx-auto h-full flex flex-col justify-center items-center text-center md:text-left md:items-start p-4">
        <!-- Company Tagline -->
        <p class="text-teal-500 font-bold mb-2 tracking-widest uppercase" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
            | Sambas Karya Perkasa
        </p>
        <!-- Main Heading -->
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 text-gray-100" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
            Powering Your Projects <br class="hidden md:block"> with Precision
        </h1>
        <!-- Subheading -->
        <p class="md:text-xl text-base mb-8 max-w-lg text-gray-100" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="600">
            Leading provider of heavy machinery and equipment for construction and industry
        </p>
        <!-- Call-to-Action Button -->
        <a href="{{ route('contact') }}" class="bg-gradient-to-r from-teal-600 to-gray-900 px-8 py-4 rounded-full text-lg font-semibold transition-transform duration-300 ease-in-out hover:bg-gradient-to-r hover:from-teal-800 hover:to-gray-700 hover:scale-110 focus:outline-none focus:ring-4 focus:ring-teal-600" data-aos="zoom-in" data-aos-duration="1600" data-aos-delay="800">
            Get in Touch
        </a>
    </div>
    <!-- Decorative Element -->
    <div class="absolute bottom-0 left-0 right-0 flex justify-center items-center mb-6" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
        <div class="animate-bounce">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
</section>

<section id="accordion-section" class="max-w-[1440px] mx-auto py-20 px-4">
    <!-- Section Title -->
    <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Benefit</span></p>
    <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">Why Choose Us</h1>

    <!-- Accordion Items -->
    <div class="bg-white rounded-lg shadow-lg p-4">
        <!-- Accordion Item 1 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse1">
                    High-Quality Equipment
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse1" class="accordion-body hidden px-5 py-4 text-gray-600">
                Our heavy machinery is sourced from industry-leading manufacturers, ensuring durability and reliability in even the toughest environments. We prioritize quality to ensure your projects run smoothly.
            </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse2">
                    Expert Support and Service
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse2" class="accordion-body hidden px-5 py-4 text-gray-600">
                Our team of experts offers 24/7 customer support, ensuring that any issues you encounter are addressed quickly. We also provide comprehensive training and maintenance services to maximize your equipment's uptime.
            </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse3">
                    Cost-Effective Solutions
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse3" class="accordion-body hidden px-5 py-4 text-gray-600">
                We offer flexible financing and leasing options to help you manage your budget while accessing top-of-the-line machinery. Our competitive pricing ensures you get the best value for your investment.
            </div>
        </div>

        <!-- Accordion Item 4 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse4">
                    Industry Experience
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse4" class="accordion-body hidden px-5 py-4 text-gray-600">
                With over 20 years of experience in the heavy machinery industry, we understand the unique challenges faced by businesses. Our expertise allows us to provide tailored solutions to meet your specific needs.
            </div>
        </div>

        <!-- Accordion Item 5 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse5">
                    Safety and Compliance
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse5" class="accordion-body hidden px-5 py-4 text-gray-600">
                We prioritize safety by ensuring our machines comply with the latest industry regulations. All equipment undergoes rigorous testing, ensuring they meet safety standards and minimize risks on-site.
            </div>
        </div>

        <!-- Accordion Item 6 -->
        <div class="accordion-item rounded-lg border border-neutral-200 bg-white shadow-md mb-2">
            <h2 class="accordion-header mb-0">
                <button class="accordion-button flex justify-between items-center w-full px-5 py-4 text-left text-base font-semibold text-neutral-800 bg-gray-50 border-0 transition-transform duration-200 ease-in-out hover:bg-teal-100 focus:outline-none"
                    type="button" aria-expanded="false" aria-controls="accordion-collapse6">
                    Eco-Friendly Technologies
                    <span class="accordion-icon transition-transform duration-200 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="accordion-collapse6" class="accordion-body hidden px-5 py-4 text-gray-600">
                Our commitment to sustainability means that our machinery incorporates the latest eco-friendly technologies. We strive to reduce environmental impact while maintaining high performance, helping you meet your green goals.
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 max-w-[1440px] mx-auto my-auto">
    <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Workflow</span></p>
    <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">Our Project Workflow</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 relative py-10">
        <!-- Step 1: Site Assessment -->
        <div class="flex flex-col items-center text-center">
            <div class="w-20 h-20 mb-4 flex items-center justify-center bg-white border-2 border-teal-500 rounded-full">
                <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Site Assessment</h3>
            <p class="text-gray-600">We conduct a comprehensive analysis of your site to determine the right machinery and equipment needed.</p>
            <div class="w-16 h-1 bg-teal-500 mt-4"></div>
            <span class="text-6xl font-bold text-gray-200 mt-4">01</span>
        </div>

        <!-- Step 2: Equipment Selection -->
        <div class="flex flex-col items-center text-center">
            <div class="w-20 h-20 mb-4 flex items-center justify-center bg-white border-2 border-teal-500 rounded-full">
                <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Equipment Selection</h3>
            <p class="text-gray-600">We select the most suitable heavy machinery tailored to your project requirements and site conditions.</p>
            <div class="w-16 h-1 bg-teal-500 mt-4"></div>
            <span class="text-6xl font-bold text-gray-200 mt-4">02</span>
        </div>

        <!-- Step 3: Customization & Planning -->
        <div class="flex flex-col items-center text-center">
            <div class="w-20 h-20 mb-4 flex items-center justify-center bg-white border-2 border-teal-500 rounded-full">
                <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Customization & Planning</h3>
            <p class="text-gray-600">Our team customizes the machinery to meet your project’s specifications and plans out the logistics.</p>
            <div class="w-16 h-1 bg-teal-500 mt-4"></div>
            <span class="text-6xl font-bold text-gray-200 mt-4">03</span>
        </div>

        <!-- Step 4: Delivery & Setup -->
        <div class="flex flex-col items-center text-center">
            <div class="w-20 h-20 mb-4 flex items-center justify-center bg-white border-2 border-teal-500 rounded-full">
                <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Delivery & Setup</h3>
            <p class="text-gray-600">We handle the transportation, delivery, and setup of the machinery at your site, ensuring everything is ready to go.</p>
            <div class="w-16 h-1 bg-teal-500 mt-4"></div>
            <span class="text-6xl font-bold text-gray-200 mt-4">04</span>
        </div>
    </div>
</section>

<!-- Add Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<section class="py-20 bg-cover bg-center relative overflow-hidden shadow-lg" style="background-image: url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2244&q=80');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="max-w-[1440px] mx-auto px-6 relative z-10">
        <p class="text-teal-400 text-center tracking-widest font-bold mb-0">| Our Work</p>
        <h2 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10 text-white">Featured Projects</h2>

        <!-- Swiper Carousel Container -->
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                <!-- Dynamic Project Slides -->
                @foreach($projects as $project)
                <div class="swiper-slide bg-white rounded-lg shadow-md overflow-hidden ">
                    <img src="{{ asset('storage/' . $project->project_image) }}" alt="{{ $project->project_name }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->project_name }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->project_description, 100) }}</p>
                        <a href="{{ route('project.show', $project->id) }}" class="text-teal-600 font-semibold hover:text-teal-800">Learn More →</a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-20">
    <div class="max-w-[1440px] mx-auto px-6">
        <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Testimonials</span></p>
        <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">What Our Clients Say</h1>
        <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-200 ease-in-out transform hover:scale-105">
                <p class="text-lg italic text-gray-700">"Sambas Perkasa Jaya has been our trusted partner for years. Their equipment is top-notch, and their service is impeccable!"</p>
                <h3 class="text-xl font-bold mt-4 text-gray-800">- Alex Smith, CEO of BuildIt Co.</h3>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-200 ease-in-out transform hover:scale-105">
                <p class="text-lg italic text-gray-700">"Their precision and commitment to quality have helped us complete projects on time and with outstanding results."</p>
                <h3 class="text-xl font-bold mt-4 text-gray-800">- Sarah Lee, Project Manager at ConstructPro</h3>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-200 ease-in-out transform hover:scale-105">
                <p class="text-lg italic text-gray-700">"We rely on their expertise and equipment for every major project, and they always deliver beyond expectations."</p>
                <h3 class="text-xl font-bold mt-4 text-gray-800">- John Doe, COO of UrbanBuilders Inc.</h3>
            </div>
        </div>
    </div>
</section>

<section class="">

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
    });

    AOS.init({
        duration: 1200,
        once: true,
    });
</script>

<script>
    import AOS from 'aos';
    import 'aos/dist/aos.css';
    AOS.init({
        duration: 1200,
        once: true,
    });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYxaht4KC1IBl4xFn8Owfn+zHXLu3lZ5L2sGo1I7Q0WPhgk5BwqHi/NxgMErMLTh6F2Zk8fOYjJpJfXyR4XA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Swiper Initialization Script -->
<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>


<style>
    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(0, 128, 128, 0.5);
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 128, 128, 0.8);
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 20px;
        font-weight: bold;
    }

    .swiper-button-next {
        right: 10px;
    }

    .swiper-button-prev {
        left: 10px;
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
        opacity: 0.3;
        pointer-events: none;
    }

    .swiper-pagination-bullet {
        background-color: rgba(0, 128, 128, 0.5);
        width: 10px;
        height: 10px;
        margin: 0 5px;
        border-radius: 50%;
        transition: background-color 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background-color: #008080;
        width: 12px;
        height: 12px;
    }

    .swiper-pagination-bullet:hover {
        background-color: rgba(0, 128, 128, 0.8);
    }
</style>
@endsection