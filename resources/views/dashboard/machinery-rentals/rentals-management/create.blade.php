@extends('layouts.dashboard')

@section('content')

<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold mb-4">Add New Rental</h1>

    <section class="bg-white dark:bg-gray-900 rounded-2xl items-start">
        <div class="py-8 px-4 max-w-2xl">
            
            <form action="{{ route('rentals-management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 w-full">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name</label>
                        
                        <input type="text" name="type_name" id="name" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('type_name') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter name" autofocus value="{{ old('type_name') }}">
                        
                        @error('type_name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Slug</label>
                        <input type="text" id="slug" name="type_slug" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('type_slug') }}" readonly>
                        
                    </div>
                    
                    
                    <div class="sm:col-span-2">
                        <div class="grid gap-2 sm:grid-cols-3 sm:gap-3">
                            <div class="w-full">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('category_id') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror">
                                    @foreach ($categories as $category)
                                        @if (old('category_id')==$category->category_id)
                                        <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                                        @else
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                        @endif
                                   
                                    @endforeach
                                </select>

                                @error('category_id')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                <select id="brand" name="brand_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('brand_id') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror">
                                    @foreach ($brands as $brand)
                                    @if (old('brand_id')==$brand->brand_id)
                                        <option value="{{ $brand->brand_id }}" selected>{{ $brand->brand_name }}</option>
                                        @else
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('brand_id')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Availability</label>
                                <select id="availability" name="type_availability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('type_availability') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror">
                                    <option selected="" value="1" 
                                    @if (old('type_availability')==='1') selected 
                                    @endif>Available</option>
                                    <option value="0" @if (old('type_availability')==='0') selected 
                                    @endif>Not Available</option>
                                    
                                </select>
                                @error('type_availability')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="grid gap-2 sm:grid-cols-3 sm:gap-3">
                            <div class="w-full">
                                <label for="length" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Length (m)</label>
                                <input type="number" name="type_length" id="length" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('type_length') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror" placeholder="Enter length" value="{{ old('type_length') }}">
                                @error('type_length')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="width" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Width (m)</label>
                                <input type="number" name="type_width" id="width" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('type_width') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror" placeholder="Enter width" value="{{ old('type_width') }}">
                                @error('type_width')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height (m)</label>
                                <input type="number" name="type_height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                                @error('type_height') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                                @enderror" placeholder="Enter height" value="{{ old('type_height') }}">
                                @error('type_height')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="operating-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operating Weight (kg)</label>
                        <input type="number" name="type_operating_weight" id="operating-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('type_operating_weight') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" placeholder="Enter operating weight" value="{{ old('type_operating_weight') }}">
                        @error('type_operating_weight')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div>
                        <label for="engine-power" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Engine Power (HP)</label>
                        <input type="number" name="type_engine_power" id="engine-power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('type_engine_power') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" placeholder="Enter engine power" value="{{ old('type_engine_power') }}">
                        @error('type_engine_power')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div>
                        <label for="fuel-capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuel Capacity (liters)</label>
                        <input type="number" name="type_fuel_capacity" id="fuel-capacity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                        @error('type_fuel_capacity') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" placeholder="Enter fuel capacity" value="{{ old('type_fuel_capacity') }}">
                        @error('type_fuel_capacity')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div>
                        <label for="max-speed" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max Speed (km/h)</label>
                        <input type="number" name="type_max_speed" id="max-speed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('type_max_speed') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" placeholder="Enter max speed" value="{{ old('type_max_speed') }}">
                        @error('type_max_speed')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div> 
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="hidden" id="description" name="type_description" value="{{ old('type_description') }}">
                        <trix-editor class="w-full @error('type_description') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" input="description"></trix-editor>
                        @error('type_description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                        <img class="img-preview w-full h-auto max-w-xs rounded-lg" alt="">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('type_image') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" aria-describedby="user_avatar_help" id="image" name="type_image" type="file" onchange="previewImage()">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 1024 kilobytes.).</p>
                        @error('type_image')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Rental
                </button>
            </form>
        </div>
      </section>
</div>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/services/machinery-rentals/rentals-management/checkSlug?name=' + name.value)
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