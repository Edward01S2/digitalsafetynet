<div class="{{ $block->classes }}">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex flex-col space-y-8 pb-12 lg:flex-row lg:space-y-0 lg:space-x-8 lg:pt-4 lg:pb-16">
      @foreach($items as $item)
        <div class="text-center lg:w-1/3">
          @svg($item['icon']['url'], 'h-7 w-7 mx-auto mb-2')
          <div class="contact-content xl:text-lg">{!! $item['content'] !!}</div>
        </div>
      @endforeach
    </div>
    <div class="mb-12 md:mb-16 lg:mb-20">
      <p class="text-center mb-4 md:mb-8">{!! $form_content !!}</p>
      <div class="contact-form md:max-w-lg md:mx-auto xl:max-w-xl">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
