<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 pb-12 lg:px-8 lg:pb-16 xl:pb-20">
    <div class="split-container flex flex-col space-y-12 lg:max-w-4xl lg:mx-auto xl:max-w-5xl">
      @foreach($items as $item)
        <div class="split-item flex flex-col md:flex-row md:items-center">
          @if($item['icon'])
            <div class="split-img">
              @svg($item['icon']['url'], 'h-20 w-20 mx-auto mb-6 md:mb-0 md:h-24 md:w-24 xl:h-28 xl:w-28')
            </div>
          @endif
          <div class="split-content">
            <div class="prose max-w-none">
              {!! $item['content'] !!}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
