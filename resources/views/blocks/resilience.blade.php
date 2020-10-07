<div id="{!! $block->block->id !!}" class="{{ $block->classes }}" style="background-color: {!! $bg !!}">
  <div class="res-container container mx-auto px-6 pt-12 pb-4 lg:px-8 lg:pb-16 xl:pb-24 xl:pt-16">
    <h2 class="text-center text-white text-2xl font-semibold mb-8 md:text-3xl lg:mb-12">{!! $title !!}</h2>
    @if($content)
      <p class="content mb-8 leading-7 font-semibold md:mb-12 md:max-w-2xl md:mx-auto lg:max-w-3xl lg:text-lg lg:leading-8">{!! $content !!}</p>
    @endif
    <div class="square-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      {{-- @dump($stories) --}}
      @foreach ($stories as $item)
        <div class="relative">
          <a class="square block relative overflow-hidden group" href="{!! $item['link'] !!}" target="_blank">
            <img class="object-cover w-full h-full absolute object-center inset-0 z-10 transform origin-center group-hover:scale-105 transition duration-500 ease-in-out" src="{!! $item['image'] !!}" alt="">
            <div class="square-gradient absolute w-full inset-0 top-auto z-20"></div>
            <div class="absolute inset-0 top-auto flex flex-col items-center mb-12 z-30">
              <div class="text-white font-semibold text-lg md:text-xl">{!! $item['title'] !!}</div>
            </div>
          </a>
          <div class="absolute inset-0 top-auto inline-flex items-center justify-center mb-6 md:text-lg z-20">
            <a href="{!! $item['url']['url'] !!}" class="text-c-orange-100 hover:text-c-teal-100">{!! $item['url']['title'] !!}</a>
            <span class="text-white">| {!! $item['location'] !!}</span>
          </div>
        </div>
      @endforeach
      @if($link)
        <div class="more-square relative md:col-span-2 lg:col-span-1">
          <div class="absolute inset-0 flex items-center justify-center">
            <a class="inline-block text-white uppercase font-extrabold tracking-widest text-sm px-6 py-3 border border-white hover:bg-c-orange-100 transition duration-150 shadow-md" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
          </div>
        </div>
      @endif
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
