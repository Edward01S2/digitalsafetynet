<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex flex-col pb-12 lg:pt-4 lg:pb-16 lg:flex-row lg:space-x-12 xl:pb-20">
      <div class="mb-6 relative md:mb-8 lg:mb-0 lg:w-1/3">
        <img class="w-full h-auto md:w-auto md:mx-auto" src="{!! $image['url'] !!}" alt="">
      </div>
      <div class="lg:w-2/3">
        <div class="prose max-w-none">
          {!! $content !!}
        </div>
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
