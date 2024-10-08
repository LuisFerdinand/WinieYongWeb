<nav class="absolute w-full z-10 top-16  text-gray-600 px-4" aria-label="breadcrumb">
    <div class="max-w-[1440px] mx-auto py-6">
        <ol class="breadcrumb flex space-x-2 items-center text-sm">
            <!-- Home Link with Icon -->
            <li class="breadcrumb-item flex items-center">
                <a href="{{ url('/') }}" class="text-teal-600 hover:text-teal-500 font-semibold transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7m0 0l7 7-2 2m-5 4h-3m3 0a3 3 0 003-3v-1a3 3 0 00-3-3H6a3 3 0 00-3 3v1a3 3 0 003 3h3z" />
                    </svg>
                    Home
                </a>
            </li>

            @foreach($segments as $key => $segment)
            @if($key != 0)
            <span class="text-gray-500">›</span>
            @endif

            @if($key + 1 != count($segments))
            <!-- Link to the previous segments -->
            <li class="breadcrumb-item">
                <a href="{{ url(implode('/', array_slice($segments, 0, $key + 1))) }}" class="text-teal-600 hover:text-teal-500 transition duration-200 capitalize">
                    {{ str_replace('-', ' ', $segment) }}
                </a>
            </li>
            @else
            <!-- Current segment (no link) -->
            <li class="breadcrumb-item text-gray-400 capitalize" aria-current="page">
                {{ str_replace('-', ' ', $segment) }}
            </li>
            @endif
            @endforeach
        </ol>
    </div>
</nav>