<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 pb-16 lg:px-8 xl:pb-20">
    <div class="flex items-center justify-center">
      <a class="inline-block bg-c-orange-100 uppercase text-white font-extrabold tracking-widest text-sm px-8 py-3 hover:bg-c-blue-200 transition duration-150 shadow-md" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
