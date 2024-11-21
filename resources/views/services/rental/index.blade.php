@extends('layouts.app')

@section('title', 'Available Rentals')

@section('content')

<div class="max-w-[1440px] mx-auto text-center px-4 py-0 mt-20">
  <section class="bg-gray-50 py-6 antialiased dark:bg-gray-900 md:py-6">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <div class="mb-3 pt-8 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8 sm:pt-4">
        <div>
          <h2 class="mt-0 text-xl font-semibold sm:mt-2 text-teal-600 dark:text-white sm:text-2xl">| Machinery Rentals</h2>
        </div>
        <div class="flex items-center space-x-1 md:space-x-3 gap-0">
          <button data-modal-toggle="filterModal" data-modal-target="filterModal" type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
            <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
            </svg>
            Filters
            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
          <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
            <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M7 4l3 3M7 4 4 7m9-3h6l-6 6h6m-6.5 10 3.5-7 3.5 7M14 18h4" />
            </svg>
            Sort
            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
          <div id="dropdownSort1" class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700" data-popper-placement="bottom">
            <ul class="p-2 text-left font-medium text-gray-500 dark:text-gray-400 text-xs" aria-labelledby="sortDropdownButton">
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_asc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'name_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Name (A to Z)
                  @if(request('sort') === 'name_asc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_desc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'name_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Name (Z to A)
                  @if(request('sort') === 'name_desc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li class="border-t border-gray-200 my-1"></li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'weight_asc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'weight_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Operating Weight ↑
                  @if(request('sort') === 'weight_asc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'weight_desc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'weight_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Operating Weight ↓
                  @if(request('sort') === 'weight_desc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li class="border-t border-gray-200 my-1"></li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'power_asc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'power_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Engine Power ↑
                  @if(request('sort') === 'power_asc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'power_desc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'power_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Engine Power ↓
                  @if(request('sort') === 'power_desc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li class="border-t border-gray-200 my-1"></li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'fuel_asc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'fuel_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Fuel Capacity ↑
                  @if(request('sort') === 'fuel_asc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'fuel_desc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'fuel_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Fuel Capacity ↓
                  @if(request('sort') === 'fuel_desc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li class="border-t border-gray-200 my-1"></li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'speed_asc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'speed_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Max Speed ↑
                  @if(request('sort') === 'speed_asc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
              <li>
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'speed_desc']) }}"
                  class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'speed_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                  Max Speed ↓
                  @if(request('sort') === 'speed_desc')
                  <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  @endif
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h1 class="text-4xl font-extrabold mb-4 text-center text-gray-800">{{ $title }}</h1>

      <!-- Search Bar and Filters -->
      <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
          <form action="{{ route('rentals.index') }}" method="GET">
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
              <!-- Preserve existing brand filters -->
              @foreach($selectedBrands as $brand)
              <input type="hidden" name="brand[]" value="{{ $brand }}">
              @endforeach

              <!-- Preserve existing category filters -->
              @foreach($selectedCategories as $category)
              <input type="hidden" name="category[]" value="{{ $category }}">
              @endforeach

              <!-- Preserve existing sort parameter -->
              @if(request('sort'))
              <input type="hidden" name="sort" value="{{ request('sort') }}">
              @endif
              <div class="relative w-full">
                <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search..." type="text" id="search" name="search" value="{{ request('search') }}">
              </div>
              <div>
                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-teal-700 hover:bg-teal-800 border-none sm:rounded-none sm:rounded-r-lg">Search</button>
              </div>
            </div>
          </form>
        </div>

      </div>
      @if(!empty($selectedBrandNames) || !empty($selectedCategoryNames) || request('search'))
      <div class="mb-4">
        <div class="flex flex-wrap gap-2 items-center mx-auto">
          <span class="text-gray-700 font-medium">Active Filters:</span>

          @if(request('search'))
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
            Search: {{ request('search') }}
            <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}" class="ml-2 text-blue-600 hover:text-blue-900">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </span>
          @endif

          @foreach($selectedBrandNames as $brandName)
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
            Brand: {{ $brandName }}
            <a href="{{ request()->fullUrlWithQuery(['brand' => array_diff($selectedBrands, [Str::slug($brandName)])]) }}"
              class="ml-2 text-green-600 hover:text-green-900">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </span>
          @endforeach

          @foreach($selectedCategoryNames as $categoryName)
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
            Category: {{ $categoryName }}
            <a href="{{ request()->fullUrlWithQuery(['category' => array_diff($selectedCategories, [Str::slug($categoryName)])]) }}"
              class="ml-2 text-yellow-600 hover:text-yellow-900">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </span>
          @endforeach

        </div>
        <div class="mt-2">
          <a href="{{ route('rentals.index') }}"
            class="rounded-lg border border-gray-200 bg-red-200 px-2 py-2 text-sm font-medium text-red-900 underline">
            Clear all filters
          </a>
        </div>
      </div>
      @endif


      <hr class="mb-4">
      <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
        @forelse ($rentals as $rental)
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 border-bl">
          <div class="h-56 w-full shadow-lg rounded-md border-2 overflow-hidden">
            <a href="{{ route('rental.show', $rental->type_slug) }}">
              @if ($rental->type_image)
              <img class="mx-auto h-full dark:hidden rounded-md object-cover" src="{{ asset('storage/'.$rental->type_image) }}" alt="" />
              @elseif ($rental->type_image_url)
              <img class="mx-auto h-full dark:hidden rounded-md object-cover" src="{{ $rental->type_image_url }}" alt="" />
              @else
              <img class="mx-auto h-full dark:hidden rounded-md object-contain" src="{{ asset('img/NoImg.png') }}" alt="" />
              @endif
              <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
            </a>
          </div>
          <div class="pt-2">
            <div class="mb-2 flex items-center  justify-between gap-">
              <a href="/services/rentals?brand={{ $rental->brand->brand_slug }}">
                <span class=" 
                      text-md font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-rental-200 dark:text-rental-800" style="color: {{ $rental->brand->brand_tx_color }}; background-color: {{ $rental->brand->brand_bg_color }}">
                  <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                  </svg>
                  {{ $rental->brand->brand_name }}
                </span>
              </a>

              <div class="flex items-center justify-center gap-1 text-slate-400 font-medium">
                <p>Available</p>
                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd" />
                </svg>

              </div>
            </div>
            <div class="flex justify-between items-start mb-[-7px] text-gray-500 bg-yellow relative">
              <div class="text-start mt-[-8px]">
                <a href="/services/rentals?category={{ $rental->category->category_slug }}" class="text-sm font-bold leading-tight text-gray-700 hover:underline dark:text-white justify-start">
                  {{ $rental->category->category_name }}
                </a>
                <div class="text-start mt-[-5px]">
                  <a href="#" class="text-2xl font-extrabold leading-tight text-gray-900 hover:underline dark:text-white justify-start">
                    {{ $rental->type_name }}
                  </a>
                </div>
              </div>

              <div class="absolute bottom-0 right-0 mb-2">
                <span class="text-sm text-end align-bottom">
                  <span class="text-lg font-semibold text-teal-600">
                    {{ $rental->type_length }}&times;{{ $rental->type_width }}&times;{{ $rental->type_height }}
                  </span> m<sup>3</sup>
                </span>

              </div>
            </div>


            <hr class="border-black my-2">
            <div class="grid grid-cols-2 gap-2 text-sm text-gray-600 text-start">
              <div class="col-span-1">
                <p class="font-semibold text-gray-800">Operating Weight:</p>
                <p class="">{{ $rental->type_operating_weight }} kg</p>
              </div>
              <div class="col-span-1">
                <p class="font-semibold text-gray-800">Engine Power:</p>
                <p>{{ $rental->type_engine_power }} HP</p>
              </div>
              <div class="col-span-1">
                <p class="font-semibold text-gray-800">Fuel Capacity:</p>
                <p>{{ $rental->type_fuel_capacity }} liters</p>
              </div>
              <div class="col-span-1">
                <p class="font-semibold text-gray-800">Max Speed:</p>
                <p>{{ $rental->type_max_speed }} km/h</p>
              </div>
            </div>

            <hr class="border-black my-2">



            <div class="mt-4 flex items-center justify-evenly gap-4">
              <a href="{{ route('rental.show', $rental->type_slug) }}">

                <button type="button" class="inline-flex items-center rounded-lg bg-rental-700 px-5 py-2.5 text-sm font-bold text-white hover:bg-rental-800 focus:outline-none focus:ring-4  focus:ring-rental-300 dark:bg-rental-600 dark:hover:bg-rental-700 dark:focus:ring-rental-800 flex-grow justify-center">
                  <svg class="-ms-2 me-1 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                  View Details
                </button>
              </a>
              <a href="https://wa.me/+6285248209388?text=I%20am%20interested%20in%20" target="_blank">
                <button type="button" class="inline-flex items-center rounded-lg bg-green-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                  <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                  </svg>
                </button>
              </a>

            </div>
          </div>
        </div>
        @empty
        <div class="col-span-full text-center p-6 bg-gray-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
          <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 0h3m-8-6h-3a4 4 0 1 0 0 8h3a4 4 0 1 0 0-8zM12 8v5m-4-4h8" />
          </svg>
          <p class="mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            No Rentals Available
          </p>
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            We couldn’t find any rentals that match your search. Please check back later or explore other categories.
          </p>
        </div>
        @endforelse
      </div>
      <div class="mt-8 ">
        {{ $rentals->appends(request()->input())->links() }}
      </div>
      <!-- Filter modal -->
      <form action="{{ route('rentals.index') }}" method="get" id="filterModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        @if(request('search'))
        <input type="hidden" name="search" value="{{ request('search') }}">
        @endif
        <div class="relative h-full w-full max-w-xl md:h-auto">
          <!-- Modal content -->
          <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t p-4 md:p-5">
              <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filters</h3>
              <button type="button" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="filterModal">
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="px-4 md:px-5">
              <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                  <li class="mr-1" role="presentation">
                    <button class="inline-block pb-2 pr-1" id="category-tab" data-tabs-target="#category" type="button" role="tab" aria-controls="profile" aria-selected="false">Category</button>
                  </li>
                  <li class="mr-1" role="presentation">
                    <button class="inline-block px-2 pb-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="brand-tab" data-tabs-target="#brand" type="button" role="tab" aria-controls="brand" aria-selected="false">Brand</button>
                  </li>
                </ul>
              </div>

              <div id="myTabContent" class="overflow-y-scroll">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="category" role="tabpanel" aria-labelledby="category-tab">
                  @foreach ($groupedCategories as $letter => $categoriesGroup)
                  @if (count($categoriesGroup) > 0)
                  <div>
                    <h5 class="text-lg font-bold uppercase text-black dark:text-white text-left border-b border-gray-900">{{ $letter }}</h5>
                    @foreach ($categoriesGroup as $category)
                    <div class="space-y-2">
                      <div class="flex items-center border-b border-gray-300 py-2">
                        <input
                          id="category_{{ $category->category_slug }}"
                          type="checkbox"
                          name="category[]"
                          value="{{ $category->category_slug }}"
                          {{ in_array($category->category_slug, $selectedCategories) ? 'checked' : '' }}
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600"
                          data-count="{{ $category->types_count }}" />
                        <label for="category_{{ $category->category_slug }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 text-start tracking-tighter">
                          {{ $category->category_name }} ({{ $category->types_count }})
                        </label>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>

              <div id="brand" role="tabpanel" aria-labelledby="brand-tab">
                <div class="grid grid-cols-3 gap-4 overflow-y-scroll h-96">
                  @foreach ($groupedBrands as $letter => $brandsGroup)
                  @if (count($brandsGroup) > 0)
                  <div>
                    <h5 class="text-lg font-bold uppercase text-black dark:text-white text-left border-b border-gray-900">{{ $letter }}</h5>
                    @foreach ($brandsGroup as $brand)
                    <div class="space-y-2">
                      <div class="flex items-center border-b border-gray-300 py-2">
                        <input
                          id="brand_{{ $brand->brand_slug }}"
                          type="checkbox"
                          name="brand[]"
                          value="{{ $brand->brand_slug }}"
                          {{ in_array($brand->brand_slug, $selectedBrands) ? 'checked' : '' }}
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600"
                          data-count="{{ $brand->types_count }}" />
                        <label for="brand_{{ $brand->brand_slug }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 text-start tracking-tighter">
                          {{ $brand->brand_name }} ({{ $brand->types_count }})
                        </label>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>

              <!-- Modal footer -->
              <hr class="border-b border-gray-200 dark:border-gray-700 mt-4">
              <div class="flex items-center space-x-4 rounded-b p-2 dark:border-gray-600 md:p-3">
                <button type="submit" class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">Apply Filters</button>
                <a href="{{ route('rentals.index') }}" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900">
                  Reset Filters
                </a>
              </div>
            </div>
          </div>
      </form>




  </section>
</div>
<script>
  function updateResultCount() {
    let totalCount = 0; // Initialize total count
    const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked'); // Select all checked checkboxes

    checkboxes.forEach(checkbox => {
      const count = parseInt(checkbox.getAttribute('data-count'), 10); // Get the count from data-count
      if (!isNaN(count)) { // Ensure it's a valid number
        totalCount += count; // Sum the counts
      } else {
        console.warn(`Invalid count for checkbox ${checkbox.id}: ${checkbox.getAttribute('data-count')}`); // Debugging info
      }
    });

    // Update the button text
    const button = document.getElementById('showResultsButton');
    button.textContent = `Show ${totalCount} results`; // Set the button text to the total count
  }

  function showResults() {
    const selectedBrands = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => {
      return checkbox.id; // Get the ID of the checked checkboxes (brand_slug)
    });

    // Build a query string from selected brands
    const queryString = selectedBrands.length > 0 ? `?brands=${selectedBrands.join(',')}` : '';

    // Redirect to the same page with the query string
    window.location.href = window.location.pathname + queryString;
  }
</script>
@endsection