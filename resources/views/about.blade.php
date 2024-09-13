@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<link rel="stylesheet" href="css/style.css">
<!-- About Us Section -->
<section class="mt-8 py-16 bg-gray-300">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-16">
        <div class="md:w-2/3"> 
            <h3 class="text-xl font-semibold mb-2">About Us</h3>
            <h1 class="text-5xl font-bold mb-4">PT. Perkasa Jaya Sambas</h1>
            <p class="text-lg mb-6">Our company has been at the forefront of heavy machinery solutions, offering top-notch equipment and services to meet the demands of the construction and industrial sectors. With a rich history of innovation and excellence, we are committed to delivering quality and reliability.</p>
            <p class="text-lg mb-6">Founded in [Year], we have grown to become a leading provider of heavy machinery. Our team of experts is dedicated to ensuring that our customers receive the best possible support and service. We take pride in our work and strive to exceed expectations in everything we do.</p>
        </div>
        <div class="md:w-1/3">
            <img src="images/image1.jpg" alt="Company Image" class="w-full rounded-lg shadow-lg">
        </div>
    </div>
    
</section>

<!-- Mission and Vision Section -->
<section class="p-16 bg-gray-900 text-white">
    <div class="container mx-auto text-center mb-8">
        <!-- Title and Subtitle -->
        <h3 class="text-xl text-teal-300 font-semibold mb-2">Vision & Mission</h3>
        <h2 class="text-5xl font-bold">Quality, Integrity and Efficiency</h2>
    </div>

    <div class="container mx-auto flex flex-col md:flex-row justify-around gap-16">
        <!-- Vision Section -->
        <div class="md:w-1/2">
            <h3 class="text-2xl font-bold mb-4 text-center md:text-left">Vision</h3>
            <p class="text-lg text-center md:text-left">
                Menjadikan Perusahaan terdepan, terbaik dan berkesinambungan dalam membagikan pelayanan jasa konstruksi, pengadaan unit dan barang dengan menjaga komitmen mutu dan tepat waktu.
            </p>
        </div>

        <!-- Mission Section -->
        <div class="md:w-1/2">
            <h3 class="text-2xl font-bold mb-4 text-center md:text-left">Mission</h3>
            <ul class="text-lg list-decimal list-inside text-center md:text-left space-y-2">
                <li>Menetapkan kepuasan klien sebagai komitmen utama</li>
                <li>Menempatkan mitra kerja sebagai bagian integral dari tim kerja</li>
                <li>Memiliki sumber daya manusia yang profesional, berintegritas tinggi serta berorientasi kepada peningkatan secara terus-menerus</li>
                <li>Meningkatkan keunggulan kompetitif dengan cara:
                    <ul class="list-disc pl-7">
                        <li>Menciptakan Inovasi melalui pemanfaatan teknologi</li>
                        <li>Memilih mitra kerja yang handal</li>
                    </ul>
                </li>
                <li>Memperluas peluang usaha melalui pengembangan jejaring profesi</li>
                <li>Memberikan nilai tambah bagi para pemegang saham</li>
            </ul>
        </div>
    </div>
</section>


<!-- Certifications Section with Margin-Top -->
<section class="py-16 bg-gray-300">
    <h2 class="text-center text-2xl font-bold mb-8">Certifications</h2>
    <div class="slider max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8" style="
    --width: 200px; 
    --height: 200px; 
    --quantity: 10;
    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="images/certificate/unnamed1.jpg" alt=""></div>
            <div class="item" style="--position: 2"><img src="images/certificate/unnamed2.jpg" alt=""></div>
            <div class="item" style="--position: 3"><img src="images/certificate/unnamed3.jpg" alt=""></div>
            <div class="item" style="--position: 4"><img src="images/certificate/unnamed4.jpg" alt=""></div>
            <div class="item" style="--position: 5"><img src="images/certificate/unnamed5.jpg" alt=""></div>
            <div class="item" style="--position: 6"><img src="images/certificate/unnamed6.jpg" alt=""></div>
            <div class="item" style="--position: 7"><img src="images/certificate/unnamed7.jpg" alt=""></div>
            <div class="item" style="--position: 8"><img src="images/certificate/unnamed8.jpg" alt=""></div>
            <div class="item" style="--position: 9"><img src="images/certificate/unnamed9.jpg" alt=""></div>
            <div class="item" style="--position: 10"><img src="images/certificate/unnamed10.jpg" alt=""></div>
        </div>
    </div>
</section>

<!-- Partners Section with Margin-Top -->
<section class="py-16 bg-gray-100">
    <h2 class="text-center text-2xl font-bold mb-8">Our Partner</h2>
    <div class="slider max-w-5xl mx-auto flex justify-around" style="
    --width: 200px; 
    --height: 200px; 
    --quantity: 10;
    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="images/partner/partner1.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="images/partner/partner2.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="images/partner/partner3.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="images/partner/partner4.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="images/partner/partner5.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="images/partner/partner6.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="images/partner/partner7.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="images/partner/partner8.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="images/partner/partner9.png" alt=""></div>
            <div class="item" style="--position: 10"><img src="images/partner/partner10.png" alt=""></div>
        </div>
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