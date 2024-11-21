@extends('layouts.dashboard')

@section('content')

<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold mb-4">Edit Brand</h1>

    <section class="bg-white dark:bg-gray-900 rounded-2xl items-start">
        <div class="py-8 px-4 max-w-2xl">
            
            <form action="{{ route('brands-management.update', $rental->brand_slug) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 w-full">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name</label>
                        
                        <input type="text" name="brand_name" id="name" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('brand_name') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter name" autofocus value="{{ old('brand_name', $rental->brand_name) }}">
                        
                        @error('brand_name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Slug</label>
                        <input type="text" id="slug" name="brand_slug" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('brand_slug', $rental->brand_slug) }}" readonly>
                        
                    </div>
                    <div class="sm:col-span-2">
                        <div class="grid gap-2 sm:grid-cols-3 sm:gap-3">
                            <div class="w-full">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Background Color</label>
                                <div class="flex items-center space-x-2">
                                    <!-- Color Picker Input -->
                                    <input type="color" id="colorBgPicker" class="w-10 h-10 p-1 border rounded-lg" value="{{ old('brand_bg_color', $rental->brand_bg_color) }}" name="brand_bg_color">
                                
                                    <!-- Hex Code Input -->
                                    <input type="text" id="hexBgCode" class="w-32 text-gray-900 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 flex-grow" value="{{ old('brand_bg_color', $rental->brand_bg_color) }}">
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Text Color</label>
                                <div class="flex items-center space-x-2">
                                    <!-- Color Picker Input -->
                                    <input type="color" id="colorTxPicker" class="w-10 h-10 p-1 border rounded-lg" value="{{ old('brand_tx_color', $rental->brand_tx_color) }}" name="brand_tx_color">

                                    <!-- Hex Code Input -->
                                    <input type="text" id="hexTxCode" class="w-32 text-gray-900 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 flex-grow" value="{{ old('brand_tx_color', $rental->brand_tx_color) }}">
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preview</label>
                                <div class="w-full justify-center items-center">
                                    <!-- Update the bg and text color here -->
                                    <span id="preview-span" class=" 
                                    text-md font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-rental-200 dark:text-rental-800" style="color: {{ $rental->brand_tx_color }}; background-color: {{ $rental->brand_bg_color }}">
                                        <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                        </svg>
                                        Brand
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="hidden" id="description" name="brand_description" value="{{ old('brand_description', $rental->brand_description) }}">
                        <trix-editor class="w-full @error('brand_description') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" input="description"></trix-editor>
                        @error('brand_description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                        <input type="hidden" name="oldImage" value="{{ $rental->brand_image }}">
                        @if($rental->brand_image)
                        <img src="{{ asset('storage/'.$rental->brand_image) }}" class="img-preview w-full h-auto max-w-xs d-block rounded-lg" alt="">
                        @else
                        @endif
                        <img class="img-preview w-full h-auto max-w-xs rounded-lg" alt="">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('brand_image') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" aria-describedby="user_avatar_help" id="image" name="brand_image" type="file" onchange="previewImage()">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 1024 kilobytes.).</p>
                        @error('brand_image')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Update Brand
                </button>
            </form>
        </div>
      </section>
</div>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/services/machinery-rentals/brands-management/checkSlug?name=' + name.value)
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
    const colorBgPicker = document.getElementById('colorBgPicker');
    const hexBgCode = document.getElementById('hexBgCode');
    const colorTxPicker = document.getElementById('colorTxPicker');
    const hexTxCode = document.getElementById('hexTxCode');
    const previewSpan = document.getElementById('preview-span');

    // Update the background color
    colorBgPicker.addEventListener('input', function() {
        hexBgCode.value = colorBgPicker.value;
        previewSpan.style.backgroundColor = colorBgPicker.value;
    });

    hexBgCode.addEventListener('input', function() {
        if (/^#([0-9A-F]{3}){1,2}$/i.test(hexBgCode.value)) {
            colorBgPicker.value = hexBgCode.value;
            previewSpan.style.backgroundColor = hexBgCode.value;
        }
    });

    // Update the text color
    colorTxPicker.addEventListener('input', function() {
        hexTxCode.value = colorTxPicker.value;
        previewSpan.style.color = colorTxPicker.value;
    });

    hexTxCode.addEventListener('input', function() {
        if (/^#([0-9A-F]{3}){1,2}$/i.test(hexTxCode.value)) {
            colorTxPicker.value = hexTxCode.value;
            previewSpan.style.color = hexTxCode.value;
        }
    });
</script>


@endsection