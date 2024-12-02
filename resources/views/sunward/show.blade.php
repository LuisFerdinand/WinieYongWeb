@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-[1440px] mx-auto px-4 py-32 lg:px-6 min-h-screen">

    <!-- Breadcrumb and Product Name -->
    <section class="mb-8">
        <p class="text-teal-600 font-bold">|<span> Sunward</span></p>
        <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-800 mb-2 lg:mb-4">{{ $product->name }}</h1>
    </section>

    <!-- Product Details Section -->
    <section class="flex flex-col lg:flex-row gap-8 lg:gap-12">

        <!-- Product Image -->
        <div class="w-full lg:w-1/2">
            <div class="relative pb-[100%] overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="absolute top-0 left-0 w-full h-full object-cover object-center rounded-lg">
            </div>
        </div>

        <!-- Product Information -->
        <div class="w-full lg:w-1/2">
            <div class="bg-white rounded-lg shadow-md p-6">

                <!-- Product Description -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Product Description</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                </div>



                <!-- Specifications Table -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Specifications</h2>
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-teal-600 text-white">
                                    <th class="p-4 text-left">Specification</th>
                                    <th class="p-4 text-left">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($product->model_number)
                                <tr>
                                    <td class="p-4 border-b">{{ 'Model Number' }}</td>
                                    <td class="p-4 border-b">{{ $product->model_number }}</td>
                                </tr>
                                @endif
                                @if($product->power_output)
                                <tr>
                                    <td class="p-4 border-b">{{ 'Power Output' }}</td>
                                    <td class="p-4 border-b">{{ $product->power_output }} HP</td>
                                </tr>
                                @endif
                                @if($product->dimensions)
                                <tr>
                                    <td class="p-4 border-b">{{ 'Dimensions' }}</td>
                                    <td class="p-4 border-b">{{ $product->dimensions }}</td>
                                </tr>
                                @endif
                                @if($product->fuel_type)
                                <tr>
                                    <td class="p-4 border-b">{{ 'Fuel Type' }}</td>
                                    <td class="p-4 border-b">{{ $product->fuel_type }}</td>
                                </tr>
                                @endif
                                @if($product->usage_instructions)
                                <tr>
                                    <td class="p-4 border-b">{{ 'Usage Instructions' }}</td>
                                    <td class="p-4 border-b">{{ $product->usage_instructions }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('products.trackClick', $product->slug) }}" target="_blank"
                        class="bg-teal-600 text-white px-6 py-3 rounded-md shadow-md hover:bg-teal-700 transition duration-300 text-center flex-grow">
                        Contact via WhatsApp
                    </a>
                    <a href="{{ route('sunward.index') }}"
                        class="bg-white text-teal-600 px-6 py-3 border border-teal-600 rounded-md shadow-md hover:bg-teal-100 transition duration-300 text-center flex-grow">
                        Back to Product List
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection