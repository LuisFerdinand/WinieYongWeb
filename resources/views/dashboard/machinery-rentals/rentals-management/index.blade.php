@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between flex-wrap flex-md-nowrap items-center pt-3 pb-2 mb-3 border-b-2">
        <h1 class="text-2xl font-bold">Rentals Management</h1>
    </div>

    @if(session('success'))
    <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
          <span class="sr-only">Dismiss</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-500 text-white px-4 py-2 rounded-lg mb-4">
        {{ session('error') }}
    </div>
    @endif

    <!-- Search Form -->
    
    <section class="bg-gray-50 dark:bg-gray-900 flex items-center">
        <div class="max-w-screen-xl mx-auto w-full">
          <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="flex flex-col items-center justify-between px-4 pt-4 pb-2 space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4">
                <div class="w-full lg:w-1/2">
                    <form action="{{ route('rentals-management.index') }}" method="GET">
                        <div class="flex items-center w-full mx-auto mb-0 sm:max-w-screen-sm space-x-2 overflow-hidden">
                            <div class="flex-grow relative flex">
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
                                <input class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-l-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search..." type="text" id="search" name="search" value="{{ request('search') }}">
                                <button type="submit" class="py-2 px-5 text-sm font-medium text-center text-white rounded-r-lg border cursor-pointer bg-teal-700 hover:bg-teal-800 border-rental-600 focus:ring-4 focus:ring-rental-300 dark:bg-rental-600 dark:focus:ring-rental-800">Search</button>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('rentals-management.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded-lg">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
                
                
              <div class="flex items-stretch justify-between flex-shrink-0 w-full space-y-0 lg:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                <a href="{{ route('rentals-management.create') }}">
                    <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                      <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                      </svg>
                      Add Rental
                    </button>
                </a>
                <div class="flex items-center space-x-3 md:w-auto">
                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                        </svg>
                        Filter
                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                            Category
                        </h6>
                        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                            <li class="flex items-center">
                                <input id="apple" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    Apple (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="fitbit" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                Fitbit (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="dell" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                Dell (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="asus" type="checkbox" value="" checked
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                Asus (97)
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <div class="overflow-x-scroll">
        <table class="w-full bg-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="bg-gray-800 text-white text-xs uppercase dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3">#</th>
                    <th scope="col" class="pr-6 pl-2 py-3">Name</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Brand</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Availability</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rentals as $rental)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="border-x px-0">
                        <div class="flex items-center justify-center">
                            {{ $loop->iteration }}.
                        </div>
                    </td>
                    <th class="flex items-center pr-6 pl-2 py-4 text-gray-900 dark:text-white">
                        @if ($rental->type_image)
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="{{ asset('storage/'.$rental->type_image) }}" alt="">
                        @elseif($rental->type_image_url)
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="{{ $rental->type_image_url }}" alt="">
                        @else
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="data:image/png;base64,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" alt="">

                        @endif
                        <div class="ps-3 w-44">
                            <div class="text-xl font-bold">{{ $rental->type_name }}</div>
                            <div class="font-semibold text-md text-gray-500">{{ $rental->category->category_name }}</div>
                        </div>  
                        
                    </th>
                    <td class="px-2 py-4 border-x mx-auto">
                        <div class="flex items-center justify-center">
                            <span class="bg-{{ $rental->brand->brand_color }}-100 text-{{ $rental->brand->brand_color }}-600 text-sm font-medium inline-flex items-center px-2 py-0.5 rounded dark:bg-rental-200 dark:text-rental-800">
                                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                </svg>
                                {{ $rental->brand->brand_name }}
                            </span>
                        </div>
                    </td>
                    <td class="border-x px-6 py-4">
                        @if($rental->type_availability)
                        <div class="flex items-center justify-center gap-0.5 text-slate-700 font-medium">
                            Available
                            <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        @else
                        <div class="flex items-center justify-center gap-0.5 text-slate-400 font-medium text-nowrap">
                            Not Available
                            <svg class="w-6 h-6 text-red-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                            </svg>
                            
                        </div>
                        @endif
                    </td>
    
                    <td class="border-x px-2 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('rentals-management.show', $rental->type_slug) }}"
                            class="text-rental-500 font-bold hover:text-rental-300">
                                <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-blue-800 bg-blue-200 rounded dark:bg-blue-700 dark:text-blue-300 hover:bg-blue-800 hover:text-blue-200">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </span>
                            </a>
                            
                            {{-- <a href="#" type="button" data-modal-target="editUserModal" data-id="{{ $rental->type_slug }}" data-modal-show="editUserModal" class="font-medium">
                                <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-blue-800 bg-blue-200 rounded dark:bg-blue-700 dark:text-blue-300 hover:bg-blue-800 hover:text-blue-200">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                                </span>
                            </a> --}}
                            
                            <a href="{{ route('rentals-management.edit', $rental->type_slug) }}" class="text-yellow-500 font-bold">
                                <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-yellow-800 bg-yellow-200 rounded dark:bg-yellow-700 dark:text-yellow-300 hover:bg-yellow-800 hover:text-yellow-200">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                      </svg>
                                </span>
                            </a>
                            
                    
                            <form action="{{ route('rentals-management.destroy', $rental->type_slug) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 font-bold hover:text-red-300" onclick="return confirm('Are you sure?')">
                                    <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-red-800 bg-red-200 rounded dark:bg-red-700 dark:text-red-300 hover:bg-red-800 hover:text-red-200">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                          </svg>
                                          
                                          
                                    </span>
                                </button>
                            </form>
                    
                            
                        </div>
                    </td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center py-4">No rentals found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

        
    <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Rental Details
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6" id="rental-details-content">
                    <!-- Rental details will be populated here -->
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        "Name" Details
                    </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rental Name</label>
                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand Name</label>
                            <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                            <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bucket Capacity</label>
                            <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuel Capacity</label>
                            <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max Speed</label>
                            <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                </div>
            </form>
        </div>
    </div> --}}

    <!-- Custom Pagination Links -->
    <div class="mt-4 flex justify-center">
        @php
        $totalPages = ceil($totalRentals / $perPage);
        @endphp

        @if ($currentPage > 1)
        <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}&search={{ $search }}" class="px-3 py-1 bg-gray-200 rounded">Previous</a>
        @endif

        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url()->current() }}?page={{ $i }}&search={{ $search }}" class="px-3 py-1 mx-1 {{ $currentPage == $i ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">{{ $i }}</a>
            @endfor

            @if ($currentPage < $totalPages)
                <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}&search={{ $search }}" class="px-3 py-1 bg-gray-200 rounded">Next</a>
                @endif
    </div>    
</div>

@endsection