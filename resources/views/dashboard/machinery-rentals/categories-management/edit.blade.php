@extends('layouts.dashboard')

@section('content')

<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <section class="bg-white dark:bg-gray-900 rounded-2xl items-start">
        <div class="py-8 px-4 max-w-2xl">
            
            <form action="{{ route('categories-management.update', $rental->category_slug) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 w-full">
                    <div class="">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name</label>
                        
                        <input type="text" name="category_name" id="name" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('category_name') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter name" autofocus value="{{ old('category_name', $rental->category_name) }}">
                        
                        @error('category_name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Slug</label>
                        <input type="text" id="slug" name="category_slug" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('category_slug', $rental->category_slug) }}" readonly>
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="hidden" id="description" name="category_description" value="{{ old('category_description', $rental->category_description) }}">
                        <trix-editor class="w-full @error('category_description') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" input="description"></trix-editor>
                        @error('category_description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                        <input type="hidden" name="oldImage" value="{{ $rental->category_image }}">
                        @if($rental->category_image)
                        <img src="{{ asset('storage/'.$rental->category_image) }}" class="img-preview w-full h-auto max-w-xs d-block rounded-lg" alt="">
                        @else
                        @endif
                        <img class="img-preview w-full h-auto max-w-xs rounded-lg" alt="">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('category_image') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" aria-describedby="user_avatar_help" id="image" name="category_image" type="file" onchange="previewImage()">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 1024 kilobytes.).</p>
                        @error('category_image')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Update Category
                </button>
            </form>
        </div>
      </section>
</div>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/services/machinery-rentals/categories-management/checkSlug?name=' + name.value)
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