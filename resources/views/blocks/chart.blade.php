<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 pb-12 lg:px-8">
    <div class="lg:max-w-3xl lg:mx-auto xl:max-w-4xl">
      <h2 class="text-center text-2xl font-semibold mb-4 md:mb-8 lg:text-3xl">{!! $title !!}</h2>
      <div class="mb-8 prose max-w-none">{!! $content !!}</div>
      <div class="">
        <img class="w-full h-auto" src="{!! $chart['url'] !!}" alt="">
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
