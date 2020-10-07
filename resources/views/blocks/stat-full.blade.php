<div class="{{ $block->classes }} {!! $align !!}">
  <div class="flex flex-col lg:pt-8 lg:pb-12 lg:flex-row xl:pb-16">
    <div class="stat-container relative md:mb-0 md:mx-auto lg:w-1/3 lg:h-auto">
      <div class="h-full flex items-center justify-center md:items-start">
        <div class="text-center bg-c-blue-50 py-12 w-full">
          <div class="relative flex flex-col md:max-w-sm md:mx-auto lg:max-w-sm">
            <div class="relative z-20 stat-num font-semibold text-c-teal-100 text-5xl mb-1 md:text-6xl">{!! $stat !!}</div>
            <div class="relative z-20 stat-text font-semibold px-16 lg:text-lg">{!! $substat !!}</div>
            <div class="quote absolute z-10"><img src="@asset('images/quotes.svg')" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-container container mx-auto lg:w-2/3 lg:mx-0 lg:max-w-none">
      <div class="prose max-w-none px-6 py-12 lg:px-8 lg:py-0">
        {!! $content !!}
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
