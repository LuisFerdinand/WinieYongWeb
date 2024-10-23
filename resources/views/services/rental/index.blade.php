@extends('layouts.app')

@section('title', 'Available Rentals')

@section('content')

<div class="max-w-[1440px] mx-auto text-center px-4 py-0 mt-20">
  <section class="bg-gray-50 py-6 antialiased dark:bg-gray-900 md:py-6">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <!-- Heading & Filters -->
      {{-- <div class="">
            <nav class="flex" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                  <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <span class="items-end">
                      Services
                    </span>
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Machinery Rentals</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2"></span>
                  </div>
                </li>
              </ol>
            </nav>
          </div> --}}
      <div class="mb-3 pt-8 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8 sm:pt-4">
        <div>
          <h2 class="mt-0 text-xl font-semibold sm:mt-2 text-teal-600 dark:text-white sm:text-2xl">| Machinery Rentals</h2>
        </div>
        <div class="flex items-center space-x-1 md:space-x-3 gap-0">
          {{-- <button type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                <span class="mr-2">Category: </span>
      
                <select id="categorySelect" name="category" class="mx-auto w-auto max-w-20 rounded-lg shadow-sm px-1" onchange="adjustWidth()">
                  <option value="" class="">All</option>
                  @foreach($categories as $category)
                      <option 
                      value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
          {{ $category->category_name }}
          </option>
          @endforeach
          <option
            value="apartment"
            {{ request('category') == 'apartment' ? 'selected' : '' }}>Excavator
          </option>
          <option value="house" {{ request('category') == 'house' ? 'selected' : '' }}>Motor Grader</option>
          <option value="condo" {{ request('category') == 'condo' ? 'selected' : '' }}>Bulldozer</option>
          </select>

          </button> --}}
          <button data-modal-toggle="filterCategory" data-modal-target="filterCategory" type="button" class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
            {{-- <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                </svg> --}}
            Category
            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
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
            <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="sortDropdownButton">
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> A-Z </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Z-A </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Increasing Price </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Decreasing Price </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Operating Weight </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Engine Power </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Bucket Capacity </a>
              </li>
              <hr>
              <li>
                <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"> Max Digging Depth </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <h1 class="text-4xl font-extrabold mb-4 text-center text-gray-800">{{ $title }}</h1>

      <!-- Search Bar and Filters -->
      <div class="py-4 px-4 mx-auto max-w-screen-xl  lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
          <form action="{{ route('rentals.index') }}" method="GET">
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
              <div class="relative w-full">
                <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('brand'))
                <input type="hidden" name="brand" value="{{ request('brand') }}">
                @endif
                <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search..." type="text" id="search" name="search" value="{{ request('search') }}">
              </div>
              <div>
                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-teal-700 hover:bg-teal-800 border-rental-600 sm:rounded-none sm:rounded-r-lg  focus:ring-4 focus:ring-rental-300 dark:bg-rental-600 dark:focus:ring-rental-800">Search</button>
              </div>
            </div>
          </form>
        </div>
        <div>
          <span id="badge-dismiss-default" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-blue-800 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300">
            Default
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-default" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-blue-800 bg-rental-100 rounded dark:bg-blue-900 dark:text-blue-300">
            Default
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-dark" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
            Dark
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-red" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-red-800 bg-red-100 rounded dark:bg-red-900 dark:text-red-300">
            Red
            <button type="button" class="inline-flex items-center p-1  ms-2 text-sm text-red-400 bg-transparent rounded-sm hover:bg-red-200 hover:text-red-900 dark:hover:bg-red-800 dark:hover:text-red-300" data-dismiss-target="#badge-dismiss-red" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-green" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-green-800 bg-green-100 rounded dark:bg-green-900 dark:text-green-300">
            Green
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-green-400 bg-transparent rounded-sm hover:bg-green-200 hover:text-green-900 dark:hover:bg-green-800 dark:hover:text-green-300" data-dismiss-target="#badge-dismiss-green" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-yellow" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-yellow-800 bg-yellow-100 rounded dark:bg-yellow-900 dark:text-yellow-300">
            Yellow
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-yellow-400 bg-transparent rounded-sm hover:bg-yellow-200 hover:text-yellow-900 dark:hover:bg-yellow-800 dark:hover:text-yellow-300" data-dismiss-target="#badge-dismiss-yellow" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-indigo" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
            Indigo
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-indigo-400 bg-transparent rounded-sm hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-800 dark:hover:text-indigo-300" data-dismiss-target="#badge-dismiss-indigo" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-purple" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-purple-800 bg-purple-100 rounded dark:bg-purple-900 dark:text-purple-300">
            Purple
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-purple-400 bg-transparent rounded-sm hover:bg-purple-200 hover:text-purple-900 dark:hover:bg-purple-800 dark:hover:text-purple-300" data-dismiss-target="#badge-dismiss-purple" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>
          <span id="badge-dismiss-pink" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-pink-800 bg-pink-100 rounded dark:bg-pink-900 dark:text-pink-300">
            Pink
            <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-pink-400 bg-transparent rounded-sm hover:bg-pink-200 hover:text-pink-900 dark:hover:bg-pink-800 dark:hover:text-pink-300" data-dismiss-target="#badge-dismiss-pink" aria-label="Remove">
              <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Remove badge</span>
            </button>
          </span>

        </div>
      </div>
      {{-- <div class="mb-4 flex justify-center mx-8">
                <form action="{{ route('rentals.index') }}" method="GET" class="flex flex-wrap justify-center space-x-4 w-full">
      @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if(request('brand'))
      <input type="hidden" name="brand" value="{{ request('brand') }}">
      @endif
      <input type="text" name="search" placeholder="Search.." class="border border-gray-300 rounded-lg py-2 px-4 shadow-sm mb-4 md:mb-0 flex-grow h-10" value="{{ request('search') }}">
      <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg md:w-auto h-10">Search</button>
      </form>
    </div> --}}
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
            <img class="mx-auto h-full dark:hidden rounded-md object-cover" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALgAAACUCAMAAAAXgxO4AAAAXVBMVEXy8vJmZmb19fX4+PhgYGBdXV3r6+vGxsbDw8O2trZVVVXJyclRUVH7+/v///90dHTc3Nx7e3uIiIjV1dVsbGyampqPj4/l5eXPz8+pqamvr6+9vb2CgoKhoaFLS0uj4khwAAAFqUlEQVR4nO2biZKqOhCGQ3cI2wkJ+37e/zFvgjqKggM1k8ipm7+mdER0PpteY4YQJycnJycnJycnJycnJycnJycnJycnJycnp18VmJNRbNYGhtQ2aJC7yKlvSDRLjNkcpOdTc/IKU+S88mnCDKkt/doQN+FlXKWmQjON4pIZAkcvjoxFECZ/PFPg3IGvyIGvyIGvyYGvaAv8Vxok++BIGtnAj6+EbXDAsM5EVg/8h1a3DA6s1u0RpX7NfkZuGzz3vYt+2iLZBedD7N3k/yzjWLa48O4q+ZvXAiq9cyar4GqyeNDfZhsMmygfq/BNHFgFx+QR/M/2BINtGasAjuvtz2bX4u3C4pvgKAW9RfDmOVbBm4XFN1/IxlvuibtTgBPM6T2r5FvByTv/66y42Mg9dsFB/r2Db3kKynvO9KjYaGwsp0Mc6MXm1Bs2uKF5zJkerU4Brv7eGMd+HGftZvmpqLdQuEpuvTsE1vZTv72AhoG/5KbrqxD229r3S5bAnrhVMIxrUXyyCQhITp/B17uas4FHr9yqq5GvF+hc4FCsYCs3z19PPRm4WDO4LqAvbn4qcN7Fq9y6Wr3m1fOAL5vHpbOMzx3uicChydYdZTb5cwE9ETjWLyn8kTxcuvl5wHmw5eBXb1k6y0fA1+omyG0/ubr54vwPlHxkUpKX9Mbqb8A9Gj1+XvtNFpkyIcYoXVodo3cOftVjAbXe1spyJnyaJhfDw6bJvYfrZHuQuI3BKr89kAPbKJlLxd397SyPbg+AtL57C3Q7HEUr+Xo/y1P+o2H9+pZdYLtkPjmL+FposQn+XBpv3gJNucdRLh/29oYWwYE9l3S/nlfJ35fMpeJbAbUHvhaAfoWwLxN+6TZUWAOHZlzxh9lbqiPgNGdWweG+rPZsc2T1jiR+f0XPLYIDbLWsfsWR5Uds7ku0Bv4al4/kBMmB8FRurvtEK+DAVhYdHsjhmM3pROyAA77H8qcUN0Jgg7xFG+AqLr+pL4e9xWdgHhy+77SVzY95i+oWjIMD3wN01FvokBoG5ztd4KjNS9maBYe9ZfFgbvFzsxYf9pdzf1I1NNt9OlURbw7c292v3siPZEWT4IfkT+RYJToL+CW3iO/POx2453eQ9vtNbgy8PE5ehftPNra3lk9HIu1Kvr81V+XTELjeP36YfLeo3xrc+Z6bA8+2vuX/DSFpQ0NqmUFujW5MRv8rxcnpf6fr+uxzYJlNEL+hYl4mZk+7mljxGZrdAubpMg2FWIBDa6zr+CUp8EwZ+xmcyP784H13A0fOb99FYao6MtCPkafzElLKLyvn6piuNPq5TxYcBS4zdgGHMBPR9XgzENLLSkz6YIu6xxGVughYCJEMBWBTz48/CE6hirgGx0gUcqwuS4tSEKCilWNZsdYvUHphU9cI0m9ZHQfYiIB04t3mZwvgUoAGT8uCY+NdDsuMQNlyHngppHXEwwp4IZBXXQqEJhhVALx8s/nZAjjhWZBqV5n3FIg5L2pwIiRgIlLCqwgZ01+IIujNiTAGOA0c0zr8XLbX4Mpv9Y8sdXwqqDVwNewXecnZ/OVgHfJ8CsIgiz7nKxqcYNZKza6Y+DisgsOQ113Gm7JRT1YKvO67rjf2D7N7wYequIJjtmpxnpStOobK4upJbfGEI6Yf7AtmcGBjKJB52z6e5j3X4GSuVnmAtbow/OMWJ9CNI/C4UOnunlWW4BHnrcoqtc4qXoK9zireyq5Je+Cxvm2oAp/GhtX3PE5KBR6UF/A+Y3KMG65yOqniREVySyLx0Ray0je879RtJ8R0rYaN+mWSKr9PqugPCZDKy9qp4jz0yr4OAYuszD+YxjXz5Vbf6YH3ehTU40tLMh/XjQuCGocl48jHQDm6uv+HhmMcMpImazuCzy6sqFcm5x+PXsVZg/8iN3mdTp2cnJycnJycnJycnGzoPxWeXsDPwZIOAAAAAElFTkSuQmCC" alt="" />
            @endif
            <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
          </a>
        </div>
        <div class="pt-2">
          <div class="mb-2 flex items-center  justify-between gap-4">
            <a href="/services/rentals?brand={{ $rental->brand->brand_slug }}">
              <span class=" 
                      bg-{{ $rental->brand->brand_color }}-100 text-{{ $rental->brand->brand_color }}-600 text-md font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-rental-200 dark:text-rental-800">
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                </svg>
                {{ $rental->brand->brand_name }}
              </span>
            </a>
            {{-- <span class="me-2 rounded bg-primary-100 px-0.5 py-0.5 text-md font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300"> 
                        <a href="/services/rentals?brand={{ $rental->brand->brand_slug }}" class="text-xl font-medium leading-tight text-rental-600 hover:underline dark:text-white">{{ $rental->brand->brand_name }}</a>
            </span> --}}

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
          {{-- <div class="mt-2 flex items-center gap-2">
                    <h1 class="font-bold">Operating Wight</h1>
                    <h1 class="font-bold">21,300 kg</h1>
                  </div> --}}
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


          {{-- <ul class="mt-2 flex items-center gap-4">
                    <li class="flex items-center gap-2">
                      <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                      </svg>
                      <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery</p>
                    </li>
        
                    <li class="flex items-center gap-2">
                      <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                      </svg>
                      <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                    </li>
                  </ul> --}}

          <div class="mt-4 flex items-center justify-evenly gap-4">
            {{-- <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">${{ $rental->min_price }}</p> --}}
            <a href="{{ route('rental.show', $rental->type_slug) }}">

              <button type="button" class="inline-flex items-center rounded-lg bg-rental-700 px-5 py-2.5 text-sm font-bold text-white hover:bg-rental-800 focus:outline-none focus:ring-4  focus:ring-rental-300 dark:bg-rental-600 dark:hover:bg-rental-700 dark:focus:ring-rental-800 flex-grow justify-center">
                <svg class="-ms-2 me-1 h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                  <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                View Details
              </button>
            </a>
            <button type="button" class="inline-flex items-center rounded-lg bg-green-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
              </svg>
            </button>
            {{-- <p class="mt-4 text-sm text-gray-500">: <span class="font-medium text-green-600">Available</span></p> --}}
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
    <!-- Filter modal -->
    <form action="#" method="get" id="filterModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
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
                  <button class="inline-block pb-2 pr-1" id="brand-tab" data-tabs-target="#brand" type="button" role="tab" aria-controls="profile" aria-selected="false">Brand</button>
                </li>
                <li class="mr-1" role="presentation">
                  <button class="inline-block px-2 pb-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="advanced-filers-tab" data-tabs-target="#advanced-filters" type="button" role="tab" aria-controls="advanced-filters" aria-selected="false">Advanced Filters</button>
                </li>
              </ul>
            </div>
            <div id="myTabContent" class="h-96 overflow-y-scroll">
              <div class="grid grid-cols-3 gap-4"> <!-- Use a grid layout for three columns -->
                @foreach ($groupedBrands as $letter => $brandsGroup)
                @if (count($brandsGroup) > 0) <!-- Only display letters with brands -->
                <div>
                  <h5 class="text-lg font-bold uppercase text-black dark:text-white text-left border-b border-gray-300">{{ $letter }}</h5> <!-- Display the letter -->
                  @foreach ($brandsGroup as $brand)
                  <div class="space-y-2">
                    <div class="flex items-center border-b border-gray-300 py-2"> <!-- Add border-bottom for separation -->
                      <input
                        id="{{ strtolower($brand->brand_slug) }}"
                        type="checkbox"
                        value="{{ $brand->types_count }}"
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        data-count="{{ $brand->types_count }}"
                        onchange="updateResultCount()" />
                      <label for="{{ strtolower($brand->brand_slug) }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
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



            <div class="space-y-4" id="advanced-filters" role="tabpanel" aria-labelledby="advanced-filters-tab">
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="grid grid-cols-2 gap-3">
                  <div>
                    <label for="min-price" class="block text-sm font-medium text-gray-900 dark:text-white"> Min Price </label>
                    <input id="min-price" type="range" min="0" max="7000" value="300" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                  </div>

                  <div>
                    <label for="max-price" class="block text-sm font-medium text-gray-900 dark:text-white"> Max Price </label>
                    <input id="max-price" type="range" min="0" max="7000" value="3500" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                  </div>

                  <div class="col-span-2 flex items-center justify-between space-x-2">
                    <input type="number" id="min-price-input" value="300" min="0" max="7000" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 " placeholder="" required />

                    <div class="shrink-0 text-sm font-medium dark:text-gray-300">to</div>

                    <input type="number" id="max-price-input" value="3500" min="0" max="7000" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="" required />
                  </div>
                </div>

                <div class="space-y-3">
                  <div>
                    <label for="min-delivery-time" class="block text-sm font-medium text-gray-900 dark:text-white"> Min Delivery Time (Days) </label>

                    <input id="min-delivery-time" type="range" min="3" max="50" value="30" step="1" class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                  </div>

                  <input type="number" id="min-delivery-time-input" value="30" min="3" max="50" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 " placeholder="" required />
                </div>
              </div>

              <div>
                <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Condition</h6>

                <ul class="flex w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                  <li class="w-full border-r border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                      <input id="condition-all" type="radio" value="" name="list-radio" checked class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                      <label for="condition-all" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> All </label>
                    </div>
                  </li>
                  <li class="w-full border-r border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                      <input id="condition-new" type="radio" value="" name="list-radio" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                      <label for="condition-new" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> New </label>
                    </div>
                  </li>
                  <li class="w-full">
                    <div class="flex items-center pl-3">
                      <input id="condition-used" type="radio" value="" name="list-radio" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                      <label for="condition-used" class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300"> Used </label>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                <div>
                  <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Colour</h6>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="blue" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="blue" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                        <div class="mr-2 h-3.5 w-3.5 rounded-full bg-primary-600"></div>
                        Blue
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="gray" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="gray" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                        <div class="mr-2 h-3.5 w-3.5 rounded-full bg-gray-400"></div>
                        Gray
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="green" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="green" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                        <div class="mr-2 h-3.5 w-3.5 rounded-full bg-green-400"></div>
                        Green
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="pink" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="pink" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                        <div class="mr-2 h-3.5 w-3.5 rounded-full bg-pink-400"></div>
                        Pink
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="red" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="red" class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                        <div class="mr-2 h-3.5 w-3.5 rounded-full bg-red-500"></div>
                        Red
                      </label>
                    </div>
                  </div>
                </div>

                <div>
                  <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Rating</h6>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="five-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                      <label for="five-stars" class="ml-2 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>First star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Second star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Third star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fourth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fifth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="four-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                      <label for="four-stars" class="ml-2 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>First star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Second star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Third star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fourth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fifth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="three-stars" type="radio" value="" name="rating" checked class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                      <label for="three-stars" class="ml-2 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>First star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Second star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Third star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fourth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fifth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="two-stars" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                      <label for="two-stars" class="ml-2 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>First star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Second star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Third star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fourth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fifth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="one-star" type="radio" value="" name="rating" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                      <label for="one-star" class="ml-2 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>First star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Second star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Third star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fourth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <title>Fifth star</title>
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </label>
                    </div>
                  </div>
                </div>

                <div>
                  <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Weight</h6>

                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="under-1-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="under-1-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Under 1 kg </label>
                    </div>

                    <div class="flex items-center">
                      <input id="1-1-5-kg" type="checkbox" value="" checked class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="1-1-5-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1-1,5 kg </label>
                    </div>

                    <div class="flex items-center">
                      <input id="1-5-2-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="1-5-2-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1,5-2 kg </label>
                    </div>

                    <div class="flex items-center">
                      <input id="2-5-3-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="2-5-3-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 2,5-3 kg </label>
                    </div>

                    <div class="flex items-center">
                      <input id="over-3-kg" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                      <label for="over-3-kg" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Over 3 kg </label>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Delivery type</h6>

                <ul class="grid grid-cols-2 gap-4">
                  <li>
                    <input type="radio" id="delivery-usa" name="delivery" value="delivery-usa" class="peer hidden" checked />
                    <label for="delivery-usa" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                      <div class="block">
                        <div class="w-full text-lg font-semibold">USA</div>
                        <div class="w-full">Delivery only for USA</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="delivery-europe" name="delivery" value="delivery-europe" class="peer hidden" />
                    <label for="delivery-europe" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                      <div class="block">
                        <div class="w-full text-lg font-semibold">Europe</div>
                        <div class="w-full">Delivery only for USA</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="delivery-asia" name="delivery" value="delivery-asia" class="peer hidden" checked />
                    <label for="delivery-asia" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                      <div class="block">
                        <div class="w-full text-lg font-semibold">Asia</div>
                        <div class="w-full">Delivery only for Asia</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="delivery-australia" name="delivery" value="delivery-australia" class="peer hidden" />
                    <label for="delivery-australia" class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                      <div class="block">
                        <div class="w-full text-lg font-semibold">Australia</div>
                        <div class="w-full">Delivery only for Australia</div>
                      </div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
            <button
              type="submit"
              class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800"
              id="showResultsButton"> <!-- Add ID for JavaScript access -->
              Show 0 results <!-- Default to 0 results initially -->
            </button>

            <button type="reset" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button>
          </div>
        </div>
      </div>
    </form>

    <form action="#" method="get" id="filterCategory" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
      <div class="relative h-full w-full max-w-xl md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
          <!-- Modal header -->
          <div class="flex items-start justify-between rounded-t p-4 md:p-5">
            <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Category</h3>
            <button type="button" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="filterCategory">
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
                  <button class="inline-block pb-2 pr-1" id="brand-tab" data-tabs-target="#brand" type="button" role="tab" aria-controls="profile" aria-selected="false">Category</button>
                </li>
              </ul>
            </div>
            <div id="myTabContent" class="h-96 overflow-y-scroll">
              <div class="grid grid-cols-3 gap-4"> <!-- Use a grid layout for three columns -->
                @foreach ($groupedCategories as $letter => $categoriesGroup)
                @if (count($categoriesGroup) > 0) <!-- Only display letters with brands -->
                <div>
                  <h5 class="text-lg font-bold uppercase text-black dark:text-white text-left">{{ $letter }}</h5> <!-- Display the letter -->
                  @foreach ($categoriesGroup as $category)
                  <div class="space-y-2">
                    <div class="flex items-center border-b border-gray-300 py-2"> <!-- Add border-bottom for separation -->
                      <input
                        id="{{ strtolower($category->category_slug) }}"
                        type="checkbox"
                        value="{{ $category->types_count }}"
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        data-count="{{ $category->types_count }}"
                        onchange="updateResultCount()" />
                      <label for="{{ strtolower($category->category_slug) }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
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
          </div>

          <!-- Modal footer -->
          <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
            <button type="submit" class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">Show 50 results</button>
            <button type="reset" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Pagination -->
    <div class="mt-8 ">
      {{ $rentals->appends(request()->input())->links() }}
    </div>
  </section>
</div>
<script>
  // Function to adjust the width based on the selected option
  function adjustWidth() {
    const select = document.getElementById('categorySelect');
    const tempOption = document.createElement('option');
    tempOption.textContent = select.options[select.selectedIndex].text;
    document.body.appendChild(tempOption);

    const tempSelect = document.createElement('select');
    tempSelect.style.visibility = 'hidden';
    tempSelect.style.position = 'absolute';
    tempSelect.appendChild(tempOption);
    document.body.appendChild(tempSelect);

    const newWidth = tempSelect.clientWidth + 20; // Adding padding for better fit
    select.style.width = newWidth + 'px';

    // Remove temporary elements from the DOM
    document.body.removeChild(tempSelect);
  }

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


  // Adjust the width when the page loads based on the current value
  window.onload = adjustWidth;
</script>
@endsection