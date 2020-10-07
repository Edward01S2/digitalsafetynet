<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 py-12 md:py-16 lg:px-8">
    <div class="lg:max-w-4xl lg:mx-auto xl:max-w-5xl">
      <h2 class="font-semibold text-xl text-center mb-8 md:mb-12 lg:text-2xl xl:text-3xl">{!! $title !!}</h2>
      <div class="flex flex-col space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:gap-x-24">
        @foreach($items as $item)
          @if($loop->first)  
            <div class="value-item text-center md:col-span-2">
              <div class="text-c-teal-100 text-4xl font-semibold leading-none xl:text-5xl">{!! $item['number'] !!}</div>
              <div class="font-semibold mb-4 md:text-lg xl:text-xl">{!! $item['subtext'] !!}</div>
              <p class="md:text-left xl:text-lg">{!! $item['content'] !!}</p>
            </div>
          @else
            <div class="value-item text-center">
              <div class="text-c-teal-100 text-4xl font-semibold leading-none xl:text-5xl">{!! $item['number'] !!}</div>
              <div class="font-semibold mb-4 md:text-lg xl:text-xl">{!! $item['subtext'] !!}</div>
              <p class="md:text-left xl:text-lg">{!! $item['content'] !!}</p>
            </div>
          @endif
        @endforeach
      </div>
      <div class="flex justify-center mt-8 lg:mt-12">
        <a class="inline-block bg-c-orange-100 text-white uppercase font-extrabold tracking-widest text-sm px-6 py-3 hover:bg-c-blue-200 transition duration-150 shadow-md" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
