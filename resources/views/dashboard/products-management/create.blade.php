@extends('layouts.dashboard')

@section('content')

<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>

    <section class="bg-white dark:bg-gray-900 rounded-2xl items-start">
        <div class="py-8 px-4 max-w-2xl">
            
            <form action="{{ route('products-management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 w-full">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name</label>
                        
                        <input type="text" name="product_name" id="name" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('product_name') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter name" autofocus value="{{ old('product_name') }}">
                        
                        @error('product_name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Slug</label>
                        <input type="text" id="slug" name="product_slug" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('product_slug') }}" readonly>
                        
                    </div>
                    <div class="">
                        <label for="model_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Model Number</label>
                        
                        <input type="text" name="product_model_number" id="model_number" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('product_model_number') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter model number" autofocus value="{{ old('product_model_number') }}">
                        
                        @error('product_model_number')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <div class="flex-grow relative flex">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                                </svg>
                            </div>
                            
                            <input class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-l-lg border border-gray-300 focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                            @error('product_price') 
                            bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                            dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror" placeholder="Enter price" type="number" id="price" name="product_price" value="{{ old('product_price') }}">
                            
                            <button id="dropdown-currency-button" data-dropdown-toggle="dropdown-currency" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-e-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600
                            @error('product_price') 
                            bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                            dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 me-2" width="32" height="32" viewBox="0 0 32 32"><path d="M31,8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4v9H31V8Z" fill="#ea3323"></path><path d="M5,28H27c2.209,0,4-1.791,4-4v-8H1v8c0,2.209,1.791,4,4,4Z" fill="#fff"></path><path d="M5,28H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4ZM2,8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>
                                USD 
                                {{-- <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg> --}}
                            </button>
                            
                        </div>
                        @error('product_price')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <div class="grid gap-2 sm:grid-cols-3 sm:gap-3">
                            <div class="w-full">
                                <label for="power_output" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Power (kW)</label>
                                <input type="number" name="product_power_output" id="power_output" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('product_power_output') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror" placeholder="Enter power_output" value="{{ old('product_power_output') }}">
                                @error('product_power_output')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="dimensions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Dimensions</label>
                                <input type="text" name="product_dimensions" id="dimensions" 
                                    class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                                    dark:bg-gray-700 dark:text-white 
                                    focus:ring-primary-600 focus:border-primary-600
                                    @error('product_dimensions') 
                                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                    @enderror"
                                    placeholder="Enter model number" autofocus value="{{ old('product_dimensions') }}">
                                
                                @error('product_dimensions')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="fuel_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Fuel Type</label>
                                <input type="text" name="product_fuel_type" id="fuel_type" 
                                    class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                                    dark:bg-gray-700 dark:text-white 
                                    focus:ring-primary-600 focus:border-primary-600
                                    @error('product_fuel_type') 
                                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                    @enderror"
                                    placeholder="Enter fuel type" autofocus value="{{ old('product_fuel_type') }}">
                                
                                @error('product_fuel_type')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="usage_instructions" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Usage Instructions
                        </label>
                        <textarea
                            id="usage_instructions"
                            name="product_usage_instructions"
                            placeholder="Enter usage instructions (separate each point with a bullet)"
                            class="mt-1 w-full h-28 rounded-md border border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-gray-900 placeholder-gray-400 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('product_usage_instructions') border-red-500 bg-red-50 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                        >{{ old('product_usage_instructions') }}</textarea>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            Usage instructions will be displayed in a bulleted list. Separate each point with a bullet (•).
                        </p>
                        @error('product_usage_instructions')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="hidden" id="description" name="product_description" value="{{ old('product_description') }}">
                        <trix-editor class="w-full @error('product_description') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" input="description"></trix-editor>
                        @error('product_description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>    
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                        <img class="img-preview w-full h-auto max-w-xs rounded-lg mb-2" alt="">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('product_image') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" aria-describedby="user_avatar_help" id="image" name="product_image" type="file" onchange="previewImage()">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 1024 kilobytes.).</p>
                        @error('product_image')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Product
                </button>
            </form>
        </div>
      </section>
</div>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/products/products-management/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
        console.log(slug)
    });
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFEvent){
            imgPreview.src = oFEvent.target.result;
        }
    }


</script>


@endsection