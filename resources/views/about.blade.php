@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<link rel="stylesheet" href="css/style.css">
<!-- About Us Section -->
<section class="flex items-center justify-center py-28 md:h-screen px-4">
    <div class="max-w-[1440px] mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 md:pr-8">
                <p class="text-teal-600 text-center tracking-widest font-bold mb-0 md:text-left">|<span> About Us</span></p>
                <h1 class="text-4xl md:text-5xl font-bold text-teal-900 mb-4 text-center md:text-left">A team of reliable and experienced Contractors</h1>
                <p id="mainText" class="text-gray-700 mb-6 text-sm text-center md:text-left md:text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div id="buttonContainer" class="flex flex-wrap gap-2 mb-6 justify-center md:justify-start border-b-2 pb-2">
                    <button onclick="showText('values', this)" class="btn-transition bg-teal-500 text-white px-3 py-1 rounded-full text-xs md:text-sm active-button">Our Values</button>
                    <button onclick="showText('expertise', this)" class="btn-transition bg-teal-500 text-white px-3 py-1 rounded-full text-xs md:text-sm">Our Expertise</button>
                    <button onclick="showText('history', this)" class="btn-transition bg-teal-500 text-white px-3 py-1 rounded-full text-xs md:text-sm">Our History</button>
                </div>
                <div id="dynamicText" class="text-gray-700 mb-6 transition-all duration-500 opacity-100 visible shadow-md border-l-2 border-t-2 border-teal-500 p-2">
                    <p class="text-gray-700">Our core values are integrity, quality, and commitment to customer satisfaction. We believe in building lasting relationships based on trust and excellence.</p>
                </div>
                <div class="flex flex-col space-y-4">
                    <div class="flex items-center justify-center md:justify-start space-x-4">
                        <button class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition-all duration-300 text-sm md:text-base">
                            LEARN MORE
                        </button>
                        <div class="flex items-center text-gray-700 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>+62-852-482-09388</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-center md:justify-start space-x-6">
                        <a href="#" class="text-teal-500 hover:text-teal-600 transition-colors duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-500 hover:text-teal-600 transition-colors duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-500 hover:text-teal-600 transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-500 hover:text-teal-600 transition-colors duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 flex items-center justify-center">
                <div class="relative">
                    <img src="img/image1.jpg" alt="Contractors at work" class="rounded-lg shadow-lg w-full h-auto">
                    <div class="absolute bottom-2 right-0 bg-teal-500 text-white py-1 px-10 md:py-4 rounded-l-lg md:rounded-l-xl text-xs md:text-sm flex gap-3">
                        <span class="text-xl md:text-3xl font-bold">25.</span>
                        <span class="block">YEARS OF<br>EXPERIENCE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function showText(type, element) {
        const dynamicText = document.getElementById("dynamicText");

        // Reset the current text content
        dynamicText.classList.remove("visible");

        setTimeout(() => {
            if (type === 'values') {
                dynamicText.innerHTML = `
                    <p class="text-gray-700">Our core values are integrity, quality, and commitment to customer satisfaction. We believe in building lasting relationships based on trust and excellence.</p>`;
            } else if (type === 'expertise') {
                dynamicText.innerHTML = `
                    <p class="text-gray-700">With 25 years of experience, our expertise spans across various construction sectors. We specialize in commercial, residential, and industrial projects, always delivering top-notch results.</p>`;
            } else if (type === 'history') {
                dynamicText.innerHTML = `
                    <p class="text-gray-700">Founded in 1998, our company has grown from a small local contractor to a leading regional construction firm. We've successfully completed over 500 projects, each contributing to our rich history.</p>`;
            }
            dynamicText.classList.add("visible");
        }, 300);

        // Remove the 'active-button' class from all buttons
        const buttons = document.querySelectorAll('#buttonContainer button');
        buttons.forEach(button => button.classList.remove('active-button'));

        // Add 'active-button' class to the clicked button
        element.classList.add('active-button');
    }
</script>

<!-- Vision and Mission Section -->
<section class="bg-gray-900 text-white py-24 px-4">
    <div class="max-w-[1440px] mx-auto">
        <p class="text-teal-400 tracking-widest text-center font-bold mb-2">| Vision & Mission</p>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-200 text-center mb-20">Shaping the Future of Construction</h2>
        <div class="flex flex-col md:flex-row gap-12">
            <div class="md:w-1/2 flex flex-col items-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-teal-400 shadow-glow">Our Vision</h2>
                <p class="text-gray-300">
                    Menjadikan Perusahaan terdepan, terbaik dan berkesinambungan dalam membagikan pelayanan jasa konstruksi, pengadaan unit dan barang dengan menjaga komitmen mutu dan tepat waktu.
                </p>
            </div>
            <div class="md:w-1/2 flex flex-col items-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-teal-400 shadow-glow">Our Mission</h2>
                <ul class="text-gray-300 list-decimal list-inside space-y-2">
                    <li>Menetapkan kepuasan klien sebagai komitmen utama</li>
                    <li>Menempatkan mitra kerja sebagai bagian integral dari tim kerja</li>
                    <li>Memiliki sumber daya manusia yang profesional, berintegritas tinggi serta berorientasi kepada peningkatan secara terus-menerus</li>
                    <li>Meningkatkan keunggulan kompetitif dengan cara:
                        <ul class="list-disc pl-7 mt-2">
                            <li>Menciptakan Inovasi melalui pemanfaatan teknologi</li>
                            <li>Memilih mitra kerja yang handal</li>
                        </ul>
                    </li>
                    <li>Memperluas peluang usaha melalui pengembangan jejaring profesi</li>
                    <li>Memberikan nilai tambah bagi para pemegang saham</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section with Margin-Top -->
<section class="max-w-[1440px] mx-auto px-4 py-20">
    <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Certifications</span></p>
    <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">Our Certifications of Heavy Machine Business</h1>

    <div class="slider max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8" style="
    --width: 200px; 
    --height: 200px; 
    --quantity: 10;
    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="img/certificate/unnamed1.jpg" alt=""></div>
            <div class="item" style="--position: 2"><img src="img/certificate/unnamed2.jpg" alt=""></div>
            <div class="item" style="--position: 3"><img src="img/certificate/unnamed3.jpg" alt=""></div>
            <div class="item" style="--position: 4"><img src="img/certificate/unnamed4.jpg" alt=""></div>
            <div class="item" style="--position: 5"><img src="img/certificate/unnamed5.jpg" alt=""></div>
            <div class="item" style="--position: 6"><img src="img/certificate/unnamed6.jpg" alt=""></div>
            <div class="item" style="--position: 7"><img src="img/certificate/unnamed7.jpg" alt=""></div>
            <div class="item" style="--position: 8"><img src="img/certificate/unnamed8.jpg" alt=""></div>
            <div class="item" style="--position: 9"><img src="img/certificate/unnamed9.jpg" alt=""></div>
            <div class="item" style="--position: 10"><img src="img/certificate/unnamed10.jpg" alt=""></div>
        </div>
    </div>
</section>

<!-- Partners Section with Margin-Top -->
<section class="max-w-[1440px] mx-auto px-4 py-20">
    <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Partners</span></p>
    <h1 class="text-4xl text-center md:text-6xl font-bold leading-tight mb-10">Visit our partnership</h1>
    <div class="slider max-w-5xl mx-auto flex justify-around" style="
    --width: 200px; 
    --height: 200px; 
    --quantity: 10;
    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="img/partner/partner1.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="img/partner/partner2.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="img/partner/partner3.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="img/partner/partner4.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="img/partner/partner5.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="img/partner/partner6.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="img/partner/partner7.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="img/partner/partner8.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="img/partner/partner9.png" alt=""></div>
            <div class="item" style="--position: 10"><img src="img/partner/partner10.png" alt=""></div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="relative max-w-[1440px] mx-auto rounded-xl shadow-xl py-20 my-20" style="background-image: url('img/about/bg1.jpg'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black opacity-70 z-10 pointer-events-none"></div>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 z-20">
        <p class="text-teal-400 tracking-widest text-center font-bold mb-2">| Services & Products</p>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-200 text-center mb-8">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 pt-20">
            <!-- Rental Card -->
            <div class="flex flex-col justify-between bg-gray-200 rounded-lg shadow-xl overflow-hidden transform transition duration-300">
                <img src="img/about/rental.jpg" alt="Rental Service" class="w-full h-48 sm:h-52 object-cover">
                <div class="p-4 sm:p-6">
                    <h3 class="text-xl font-bold text-gray-800">Heavy Machine Rental</h3>
                    <p class="text-gray-600 mt-2">Quality heavy machines available for rent to suit your project needs.</p>
                </div>
                <div class="bg-teal-500 text-center py-3 hover:bg-teal-600 transition duration-300">
                    <a href="/rental" class="text-white font-bold px-4 py-2 inline-block rounded-lg transition">View Rental Services</a>
                </div>
            </div>

            <!-- Product Card -->
            <div class="flex flex-col justify-between bg-gray-200 rounded-lg shadow-xl overflow-hidden transform transition duration-300">
                <img src="img/about/sunward.png" alt="Our Products" class="w-full h-48 sm:h-52 object-cover">
                <div class="p-4 sm:p-6">
                    <h3 class="text-xl font-bold text-gray-800">Our Products</h3>
                    <p class="text-gray-600 mt-2">Explore our wide range of heavy machines designed for various industries.</p>
                </div>
                <div class="bg-teal-500 text-center py-3 hover:bg-teal-600 transition duration-300">
                    <a href="{{ route('sunward.index') }}" class="text-white font-bold px-4 py-2 inline-block rounded-lg transition">View Products</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Meet the Team Section -->
<section class="py-20 bg-gray-100">
    <div class=" mx-auto max-w-[1440px] text-center">
        <p class="text-teal-600 text-center tracking-widest font-bold mb-0">|<span> Partners</span></p>
        <h2 class="text-3xl font-bold mb-6">Meet Our Team</h2>
        <div class="flex flex-wrap justify-center">

            <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('img/team-member1.jpg') }}" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('img/team-member2.jpg') }}" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-600">Operations Manager</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .btn-transition {
        transition: all 0.3s ease;
    }

    .btn-transition:hover {
        background-color: #2c7a7b;
        transform: scale(1.1);
    }

    #dynamicText {
        transition: opacity 0.5s ease, transform 0.5s ease;
        opacity: 0;
        transform: translateY(10px);
    }

    #dynamicText.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .active-button {
        background-color: #2c7a7b !important;
        /* Change this color as desired */
        color: #fff;
        transform: scale(1.05);
    }
</style>
@endsection