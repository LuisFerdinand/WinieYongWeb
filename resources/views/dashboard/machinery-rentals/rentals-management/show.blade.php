@extends('layouts.dashboard')

@section('content')

    <section class="py-0 antialiased dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
          <!-- Heading & Filters -->
          <div class="mb-4 items-end justify-between space-y-4 sm:space-y-0">
            <div>
              <div class="relative flex items-center justify-between mt-4">
                <div>
                    <a href="{{ route('rentals-management.index') }}">
                        <button type="button" class="inline-flex items-center rounded-lg bg-rental-700 px-5 py-2.5 text-sm font-bold text-white hover:bg-rental-800 focus:outline-none focus:ring-4  focus:ring-rental-300 dark:bg-rental-600 dark:hover:bg-rental-700 dark:focus:ring-rental-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                            </svg>
                            Back
                        </button>
                    </a>
                </div>
                <div class="absolute left-1/2 transform -translate-x-1/2">
                    <h2 class="text-xl font-semibold text-teal-600 dark:text-white sm:text-2xl">| Rental Details</h2>
                </div>

            </div>
            
              
            </div>
            </div>
        </div>
        <hr class="mb-0">
    <section>
    <section class="py-8 bg-white md:py-4 dark:bg-gray-900 antialiased text-start">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                <div class=" w-full shadow-lg rounded-md border-2 overflow-hidden md:pt-">
                    @if ($rental->type_image)
                    <img class="w-full dark:hidden rounded-md object-cover" src="{{ asset('storage/'.$rental->type_image) }}" alt="" />
                    @elseif ($rental->type_image_url)
                    <img class="w-full dark:hidden rounded-md object-cover" src="{{ $rental->type_image_url }}" alt="" />
                    @else
                    <img class="w-full dark:hidden rounded-md object-cover" src="data:image/png;base64,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" alt="">
                    @endif
                    <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                </div>
            </div>
            <div class="pt-6 lg:pt-0 mx-8">
                <div class="mb-0 flex items-end  justify-between  gap-4">
                  
                    <div>
                      <a href="/services/rentals?brand={{ $rental->brand->brand_slug }}">
                        <span class=" 
                        bg-{{ $rental->brand->brand_color }}-100 text-{{ $rental->brand->brand_color }}-600 text-xl font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-rental-200 dark:text-rental-800">
                          <svg class="mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                          {{ $rental->brand->brand_name }}
                      </span>
                      </a>
                        <div class="text-start">
                            <a href="#" class="text-5xl font-extrabold leading-tight text-gray-900 hover:underline dark:text-white justify-start ">{{ $rental->type_name }}</a>
                          </div>
                        <div class="text-start mt-[-8px]">
                          <a href="/services/rentals?category={{ $rental->category->category_slug }}" class="text-2xl font-bold leading-tight text-gray-500 hover:underline dark:text-white justify-start ">{{ $rental->category->category_name }}</a>
                        </div>
                    </div>
                    
        
                    <div class="flex items-center justify-center gap-1 text-slate-400 font-medium">
                        <a href="{{ route('rentals-management.edit', $rental->type_slug) }}">
                            <button type="button" class="inline-flex items-center rounded-lg bg-yellow-500 px-2.5 py-2 text-sm font-medium text-white hover:bg-yellow-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                  </svg>
                            </button>
                        </a>
                        <form action="{{ route('rentals-management.destroy', $rental->type_slug) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center rounded-lg bg-red-500 px-2.5 py-2 text-sm font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="return confirm('Are you sure?')">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                  </svg>
                            </button>
                        </form>
                        <button type="button" class="inline-flex items-center rounded-lg bg-green-500 px-2.5 py-2 text-sm font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                              <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                            </svg>
                        </button>
                      
                      
                    </div>
                  </div>
                
                <hr class="border-gray-400 my-2">
                <p class="mb-6 text-gray-500 dark:text-gray-400">
                    {{ $rental->type_description }}
                    Studio quality three mic array for crystal clear calls and voice
                    recordings. Six-speaker sound system for a remarkably robust and
                    high-quality audio experience. Up to 256GB of ultrafast SSD storage.
                    </p>
                
                
                <hr class="border-gray-400 my-2">
                
                <div class="grid grid-cols-2 gap-2 text-lg text-gray-600 text-start">
                  <div class="col-span-1">
                      <p class="font-medium">Operating Weight:</p>
                      <p class="">21,300 kg</p>
                  </div>
                  <div class="col-span-1">
                      <p class="font-medium">Engine Power:</p>
                      <p>158 HP</p>
                  </div>
                  <div class="col-span-1">
                      <p class="font-medium">Bucket Capacity:</p>
                      <p>1.2 m³</p>
                  </div>
                  <div class="col-span-1">
                      <p class="font-medium">Max Digging Depth:</p>
                      <p>6.67 m</p>
                  </div>
              </div>
              <hr class="border-gray-400 my-2">
              <div class="items-center justify-start gap-1 text-slate-400 font-medium">
                <h1 class="text-gray-600 font-medium">Availability:</h1>
                <div class="flex">
                    @if ( $rental->type_availability =='1' )
                        
                    
                    <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                    </svg>
                    <p>Available</p>
                    @else
                    <svg class="w-6 h-6 text-red-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                    </svg>
                      <p>Available</p>
                    @endif
                </div>
                
              </div>
                
              
            
            </div>
        </div>
    </section>
@endsection