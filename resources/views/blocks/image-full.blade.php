<div id="{!! $block->block->id !!}" class="{{ $block->classes }} {!! $align !!}">
  <div class="content flex flex-col pb-12 lg:pt-8 lg:pb-12 lg:flex-row">
    <div class="img-container relative h-56 md:h-84 lg:w-1/3 lg:h-auto">
      <img class="w-full h-full object-cover object-center absolute" src="{!! $image['url'] !!}" alt="">
    </div>
    <div class="content-container container mx-auto lg:w-2/3 lg:mx-0 lg:max-w-none">
      <div class="prose max-w-none px-6 py-8 lg:px-8 lg:py-0">
        {!! $content !!}
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
