<div class="bg-cover bg-center {{ $block->classes }}" style="background-image:url('{!! $bg['url'] !!}')">
  <div class="container mx-auto px-6 py-16 md:pt-40 md:pb-20 lg:px-8 lg:pt-48 lg:pb-28 xl:pt-56">
    <div class="text-white text-center">
      <h1 class="text-3xl font-semibold leading-tight mb-6 md:text-4xl lg:text-5xl">{!! $title !!}</h1>
      <p class="mb-6 md:max-w-2xl md:mx-auto md:text-lg md:mb-8">{!! $content !!}</p>
      <a class="inline-block bg-c-orange-100 uppercase font-extrabold tracking-widest text-sm px-6 py-3 hover:bg-c-blue-200 transition duration-150 shadow-md" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
