@extends('layouts.dashboard')

@section('content')

<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold mb-4">Add New Job</h1>

    <section class="bg-white dark:bg-gray-900 rounded-2xl items-start">
        <div class="py-8 px-4 max-w-2xl">
            
            <form action="{{ route('jobs-management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 w-full">
                    <div class="">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Title</label>
                        
                        <input type="text" name="job_title" id="title" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('job_title') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter title" autofocus value="{{ old('job_title') }}">
                        
                        @error('job_title')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Slug</label>
                        <input type="text" id="slug" name="job_slug" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('job_slug') }}" readonly>
                        
                    </div>
                    <div class="">
                        <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Department</label>
                        
                        <input type="text" name="job_department" id="department" 
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 
                            dark:bg-gray-700 dark:text-white 
                            focus:ring-primary-600 focus:border-primary-600
                            @error('job_department') 
                                bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                                dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                            @enderror"
                            placeholder="Enter department" autofocus value="{{ old('job_department') }}">
                        
                        @error('job_department')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="work_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Work Type</label>
                        <select id="work_type" name="job_work_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('job_work_type') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror">
                            <option selected="" value="Remote" 
                            @if (old('job_work_type')==='Remote') selected 
                            @endif>Remote</option>
                            <option value="Onsite" @if (old('job_work_type')==='Onsite') selected 
                            @endif>Onsite</option>
                        </select>
                        @error('job_work_type')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="job_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('job_status') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror">
                            <option selected="" value="Open" 
                            @if (old('job_status')==='Open') selected 
                            @endif>Open</option>
                            <option value="Closed" @if (old('job_status')==='Closed') selected 
                            @endif>Closed</option>
                            
                        </select>
                        @error('job_status')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="total_positions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Positions</label>
                        <input type="number" name="job_total_positions" id="total_positions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('job_total_positions') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" placeholder="Enter total positions" value="{{ old('job_total_positions') }}">
                        @error('job_total_positions')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="requirements" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Requirements
                        </label>
                        <textarea
                            id="requirements"
                            name="job_requirements"
                            placeholder="Enter requirements (separate each point with a bullet)"
                            class="mt-1 w-full h-28 rounded-md border border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-gray-900 placeholder-gray-400 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('job_requirements') border-red-500 bg-red-50 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                        >{{ old('job_requirements') }}</textarea>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            Requirements will be displayed in a bulleted list. Separate each point with a bullet (•).
                        </p>
                        @error('job_requirements')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="hidden" id="description" name="job_description" value="{{ old('job_description') }}">
                        <trix-editor class="w-full @error('job_description') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" input="description"></trix-editor>
                        @error('job_description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>    
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                        <img class="img-preview w-full h-auto max-w-xs rounded-lg mb-2" alt="">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('job_image') 
                        bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                        dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
                        @enderror" aria-describedby="user_avatar_help" id="image" name="job_image" type="file" onchange="previewImage()">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 1024 kilobytes.).</p>
                        @error('job_image')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Job 
                </button>
            </form>
        </div>
      </section>
</div>
<script>
    const name = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/products/jobs-management/checkSlug?name=' + name.value)
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