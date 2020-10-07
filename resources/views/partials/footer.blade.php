<footer>
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex flex-col lg:pt-4">

      <div class="flex items-center py-8 justify-center space-x-4">
        @foreach($social as $item)
          <a class="p-2 rounded-full inline-block hover:opacity-50" href="{!! $item['url'] !!}" style="background-color: {!! $item['bg'] !!}" target="_blank">
            @svg($item['icon']['url'], 'h-5 w-5 fill-curent text-white md:h-4 md:w-4')
          </a>
        @endforeach
      </div>

      <div class="hidden md:block md:mb-8">
        <div class="flex space-x-8 justify-center lg:space-x-10">
          @foreach ($nav as $item)
            <a class="nav-link font-chronicle leading-5 text-c-blue-200 uppercase font-semibold focus:outline-none group focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out hover:text-c-orange-100 xl:text-lg {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
            </a>
          @endforeach
        </div>
      </div>

      <div class="flex justify-center py-8 border-t border-b border-gray-300 md:items-center md:py-6">

        <div class="flex-shrink-0 md:flex items-center">
          <a href="{{ $logo_link['url'] }}" class="pb-2 hover:opacity-50" target="_blank">
            <img id="logo-main" class="h-12 w-auto" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
        </div>

        <div class="hidden">
          <a class="uppercase inline-flex px-4 py-2 items-center bg-c-blue-200 text-white hover:bg-c-orange-100" href="{!! $login_url !!}" target="_blank">
            <img class="h-4 w-4 mr-2" src="{!! $login_logo['url'] !!}" alt="">
            {!! $login !!}
          </a>
        </div>

      </div>

      <div class="py-8">
        <div class="copyright text-center md:text-sm">
          <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
          {!! $copyright !!}
        </div>
      </div>

    </div>
  </div>
</footer>
