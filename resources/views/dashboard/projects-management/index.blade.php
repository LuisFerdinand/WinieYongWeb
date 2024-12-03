@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between flex-wrap flex-md-nowrap items-center pt-3 pb-2 mb-3 border-b-2">
        <h1 class="text-2xl font-bold">Projects Management</h1>
    </div>

    @if(session('success'))
    <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                    <form action="{{ route('projects-management.index') }}" method="GET">
                        <div class="flex items-center w-full mx-auto mb-0 sm:max-w-screen-sm space-x-2 overflow-hidden">
                            @if(request('sort'))
                            <input type="hidden" name="sort" value="{{ request('sort') }}">
                            @endif
                            <div class="flex-grow relative flex">
                                <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                
                                <input class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-l-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search..." type="text" id="search" name="search" value="{{ request('search') }}">
                                <button type="submit" class="py-2 px-5 text-sm font-medium text-center text-white rounded-r-lg border cursor-pointer bg-primary-700 hover:bg-primary-900 border-rental-600 focus:ring-4 focus:ring-job-300 dark:bg-rental-600 dark:focus:ring-rental-800">Search</button>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('projects-management.index') }}" class="bg-gray-300 hover:bg-gray-500 text-black px-4 py-2 rounded-lg">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
                
                
              <div class="flex items-stretch justify-between flex-shrink-0 w-full space-y-0 lg:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                <a href="{{ route('projects-management.create') }}">
                    <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-900 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                      <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                      </svg>
                      Add project
                    </button>
                </a>
                <div class="flex items-center space-x-3 md:w-auto">
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
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
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
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif
                                </a>
                            </li>
                            <li class="border-t border-gray-200 my-1"></li>
                            <li>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'updated_asc']) }}" 
                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'updated_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                                    Last Updated ↑ (Oldest)
                                    @if(request('sort') === 'updated_asc')
                                        <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'updated_desc']) }}" 
                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'updated_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                                    Last Updated ↓ (Newest)
                                    @if(request('sort') === 'updated_desc')
                                        <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif
                                </a>
                            </li>
                            <li class="border-t border-gray-200 my-1"></li>
                            <li>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'date_asc']) }}" 
                                   class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'date_asc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                                    Project Date ↑ (Oldest)
                                    @if(request('sort') === 'date_asc')
                                        <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'date_desc']) }}" 
                                   class="group inline-flex w-full items-center rounded-md px-3 py-2 text-xs {{ request('sort') === 'date_desc' ? 'bg-gray-100 text-gray-900' : 'text-gray-500' }} hover:bg-gray-100 hover:text-gray-900">
                                    Project Date ↓ (Newest)
                                    @if(request('sort') === 'date_desc')
                                        <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif
                                </a>
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
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="bg-gray-800 text-white text-xs uppercase dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3 rounded-tl-lg">#</th>
                    <th scope="col" class="pr-6 pl-2 py-3">Name</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Description</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Date</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Status</th>
                    <th scope="col" class="pr-6 pl-2 py-4">Highlights</th>
                    <th scope="col" class="pr-6 pl-2 py-4 rounded-tr-lg">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-900 @if($loop->last) !border-0 @endif">
                    <td class="border-x px-0  @if($loop->last) rounded-bl-lg @endif">
                        <div class="flex items-center justify-center">
                            {{ ($projects->currentPage() - 1) * $projects->perPage() + $loop->iteration }}.
                        </div>
                    </td>
                    <th class="flex items-center pr-6 pl-2 py-4 dark:text-white">
                        @if ($project->project_image)
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="{{ asset('storage/'.$project->project_image) }}" alt="">
                        @elseif($project->project_image_url)
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="{{ $project->project_image_url }}" alt="">
                        @else
                        <img class="w-14 h-14 object-contain rounded border-gray-500 border md:w-16 md:h-16" src="{{ asset('img/NoImg.png') }}" alt="">
                        @endif
                        

                        <div class="ps-3 w-44">
                            <div class="text-lg font-semibold leading-tight">{{ $project->project_name }}</div>
                            <hr class="border-gray-500 my-1">
                            <div class="font-semibold text-md text-gray-600 leading-tight">{{ $project->project_client }}</div>
                            {{-- <div class="font-medium text-md text-gray-500 italic">{{ $project->project_work_type }}</div> --}}
                        </div>
                    </th>
                    <td class="border-x px-6 py-4">
                        <div class="w-full">
                            {!! $project->project_description !!}
                        </div>
                    </td>
                    <td class="border-x px-6 py-4">
                        <div class="flex items-center justify-center gap-0.5 font-medium">
                            {{ \Carbon\Carbon::parse($project->project_date)->format('l, d-m-Y') }}
                        </div>
                    </td>
                    
                    <td class="border-x px-6 py-4">
                        <div class="flex items-center justify-center">
                            @switch($project->project_status)
                                @case('Completed')
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 flex items-center gap-2 ring-2 ring-green-200 hover:bg-green-200 transition-all duration-300 font-semibold text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Completed
                                    </span>
                                    @break
                    
                                @case('Ongoing')
                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 flex items-center gap-2 ring-2 ring-blue-200  hover:bg-blue-200 transition-all duration-300 font-semibold text-sm animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                        </svg>
                                        Ongoing
                                    </span>
                                    @break
                    
                                @case('On Hold')
                                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 flex items-center gap-2 ring-2 ring-yellow-200  hover:bg-yellow-200 transition-all duration-300 font-semibold text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        On Hold
                                    </span>
                                    @break
                    
                                @case('Cancelled')
                                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 flex items-center gap-2 ring-2 ring-red-200  hover:bg-red-200 transition-all duration-300 font-semibold text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                        Cancelled
                                    </span>
                                    @break
                    
                                @case('Planned')
                                    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-800 flex items-center gap-2 ring-2 ring-gray-200 hover:bg-gray-200 transition-all duration-300 font-semibold text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                        Planned
                                    </span>
                                    @break
                    
                                @default
                                    <span class="px-3 py-1 rounded-full bg-gray-200 text-gray-700 flex items-center gap-2 font-semibold text-sm">
                                        Unknown
                                    </span>
                            @endswitch
                        </div>
                    </td>
                    <td class="border-x px-6 py-4">
                        <div class="flex items-center justify-center gap-0.5 font-normal">
                            {!! $project->project_highlights !!}
                        </div>
                    </td>
                    

                    <td class="border-x px-2 py-4 @if($loop->last) rounded-br-lg @endif">
                        <div class="flex items-center justify-center gap-2">
                            <a href=
                            "{{ route('projects-management.edit', $project->project_slug) }}" class="text-yellow-500 font-bold"
                            > 
                                <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-yellow-800 bg-yellow-200 rounded dark:bg-yellow-700 dark:text-yellow-300 hover:bg-yellow-800 hover:text-yellow-200">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                </span>
                            </a>


                            <form action=
                            "{{ route('projects-management.destroy', $project->project_slug) }}"
                             method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 font-bold hover:text-red-300" onclick="return confirm('Are you sure?')">
                                    <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-red-800 bg-red-200 rounded dark:bg-red-700 dark:text-red-300 hover:bg-red-800 hover:text-red-200">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>


                                    </span>
                                </button>
                            </form>


                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="9" >
                        <div class="w-full text-center p-6 bg-gray-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 0h3m-8-6h-3a4 4 0 1 0 0 8h3a4 4 0 1 0 0-8zM12 8v5m-4-4h8" />
                            </svg>
                            <p class="mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                              No jobs Available
                            </p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                              We couldn’t find any jobs that match your search. Please check back later or explore other keywords.
                            </p>
                          </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
    @if(count($projects)>0)
        <div id="readJobModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <div class="absolute left-1/2 transform -translate-x-1/2 pt-3">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Job Details
                            </h3>
                        </div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="readJobModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <hr class="mb-0">
                    <div class="p-6 space-y-6" id="job-details-content">
                        {{-- job Details --}}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="mt-8 ">
        {{ $projects->appends(request()->input())->links() }}
    </div>
</div>
<script>
    // Read Modal
    // document.addEventListener("DOMContentLoaded", function() {
    //     const modal = document.getElementById("readJobModal");
    //     const jobDetailsContent = document.getElementById("job-details-content");
    
    //     // Get all buttons with data-modal-target
    //     const buttons = document.querySelectorAll('[data-modal-target="readJobModal"]');
    //     console.log("Number of buttons found:", buttons.length);
        
    //     if (buttons.length > 0) {
    //         buttons.forEach(button => {
    //             button.addEventListener("click", function(event) {
    //                 event.preventDefault(); // Prevent default link behavior
                    
    //                 // Get job d om button attributes
    //                 const jobData = JSON.parse(this.getAttribute("data-job"));
    //                 const editUrl = `/dashboard/services/machinery-jobs/projects-management/${jobData.project_slug}/edit`;
    //                 const deleteUrl = `/dashboard/services/machinery-jobs/projects-management/${jobData.project_slug}`;
    //                 let imageContent = "";
    //                 if (jobData.project_image) {
    //                     imageContent = `<img class="w-full dark:hidden rounded-md object-cover" src="{{ asset('storage/') }}${jobData.project_image}" alt="" />`;
    //                 } else if (jobData.project_image_url) {
    //                     imageContent = `<img class="w-full dark:hidden rounded-md object-cover" src="${jobData.project_image_url}" alt="" />`;
    //                 } else {
    //                     imageContent = `<img class="w-full dark:hidden rounded-md object-cover" src="{{ asset('img/NoImg.png') }}" alt="">
    //                     <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />`;
    //                 }
        
    //                 // Populate the modal content dynamically
    //                 jobDetailsContent.innerHTML = `
    //                     <section class="py-8 bg-white md:py-4 dark:bg-gray-900 antialiased text-start">
    //                         <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
    //                             <div class="">
    //                             <div class="shrink-0 max-w-md lg:max-w-lg mx-auto flex justify-center">
    //                                 <div class=" w-1/2 shadow-lg rounded-md border-2 overflow-hidden">
    //                                     ${imageContent}
    //                                     <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
    //                                 </div>
    //                             </div>
    //                             <div class="pt-0 sm:pt-6 mx-0 sm:mx-8">
    //                                 <div class="mb-0 flex items-end  justify-between  gap-4">
                                    
    //                                     <div>
                                        
    //                                         <div class="text-start">
    //                                             <a href="#" class="text-5xl font-extrabold leading-tight text-gray-900 hover:underline dark:text-white justify-start ">${ jobData.project_name }</a>
    //                                         </div>
    //                                     </div>
                                        
                            
    //                                     <div class="flex items-center justify-center gap-1 text-slate-400 font-medium">
    //                                         <a href="${editUrl}">
    //                                             <button type="button" class="inline-flex items-center rounded-lg bg-yellow-500 px-2.5 py-2 text-sm font-medium text-white hover:bg-yellow-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
    //                                                 <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
    //                                                     <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
    //                                                     <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
    //                                                 </svg>
    //                                             </button>
    //                                         </a>
    //                                         <form action="${deleteUrl}" method="POST" class="inline-block">
    //                                             @csrf
    //                                             @method('DELETE')
    //                                             <button type="submit" class="inline-flex items-center rounded-lg bg-red-500 px-2.5 py-2 text-sm font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" onclick="return confirm('Are you sure?')">
    //                                                 <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    //                                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
    //                                                 </svg>
    //                                             </button>
    //                                         </form>
    //                                     </div>
    //                                 </div>
                                    
    //                                 <hr class="border-gray-400 my-2">
    //                                 <p class="mb-6 text-gray-500 dark:text-gray-400">
    //                                     ${ jobData.project_description }
    //                                     </p>
                                    
                                    
    //                                 <hr class="border-gray-400 my-2">
    //                             </div>
    //                         </div>
    //                     </section>
    //                 `;
        
    //                 // Show the modal
    //                 modal.classList.remove("hidden");
    //             });
    //         });
        
    //         // Close modal function
    //         const closeModalButtons = document.querySelectorAll('[data-modal-hide="readJobModal"]');
    //         closeModalButtons.forEach(button => {
    //             button.addEventListener("click", function() {
    //                 modal.classList.add("hidden");
    //             });
    //         });
    //     }else {
    //         console.log("No job buttons found");
    //     }
    // });

</script>

@endsection