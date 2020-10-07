<nav id="nav" x-data="{open: false}" class="bg-white w-full z-50 border-b border-gray-200">
  <div class="container mx-auto px-6 py-4 lg:px-8">
    <div class="flex justify-between items-center">

      <div class="flex">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ home_url('/') }}" class="pb-2 hover:opacity-50">
            <img id="logo-main" class="h-12 w-auto md:h-16 lg:h-12 xl:h-16" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>
      </div>

      <div class="hidden nav-container items-center lg:flex md:space-x-8 xl:space-x-10">
        <a class="flex items-center py-2 px-4 text-sm text-white uppercase bg-c-orange-100 tracking-widest font-extrabold hover:bg-c-blue-200 focus:outline-none transition duration-150 ease-in-out" href="{{ $file['url'] }}" target="_blank">
          <svg class="fill-current h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
          </svg>
        </button>
          <span class="hidden lg:inline">Download&nbsp;</span>Report
        </a>
        @foreach ($navigation as $item)
          <a class="nav-link font-chronicle leading-5 text-c-blue-200 uppercase font-semibold focus:outline-none group focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out hover:text-c-orange-100 xl:text-lg {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
            <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
          </a>
        @endforeach
      </div>

      <div class="flex items-center lg:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-c-blue-200 focus:outline-none transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="bg-white border-t-4 border-c-blue-200 lg:hidden" x-cloak>
    <div @click.away="open = false" class="pb-8">
      <ul class="flex flex-col">
        <li class="group relative px-6 hover:bg-c-orange-100 transition duration-150 ease-in-out {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
          <a class="flex items-center py-4 text-lg text-c-blue-200 uppercase tracking-wider font-bold hover:text-white focus:outline-none transition duration-150 ease-in-out md:text-base" href="{{ $file['url'] }}" target="_blank">
            <svg class="fill-current h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Download Report
          </a>
        </li>
        @foreach ($navigation as $item)
          <li class="group relative px-6 hover:bg-c-orange-100 transition duration-150 ease-in-out {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="block py-4 text-lg text-c-blue-200 tracking-wider uppercase font-bold hover:text-white focus:outline-none transition duration-150 ease-in-out md:text-base" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>