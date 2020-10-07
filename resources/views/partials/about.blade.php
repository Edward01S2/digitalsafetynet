<div id="about" class="bg-c-blue-100 bg-cover bg-center" style="background-image:url('{!! $bg['url'] !!}');">
  <div class="container mx-auto px-6 py-12 pb-16 lg:pt-16 lg:px-8 xl:py-20">
    <div class="text-white text-center lg:max-w-4xl lg:mx-auto xl:max-w-5xl">
      <h3 class="font-semibold text-2xl mb-4 lg:text-3xl">{!! $title !!}</h3>
      <div class="mb-8 leading-7 md:text-left lg:leading-8 lg:text-lg">{!! $content !!}</div>
      <a class="inline-block bg-c-orange-100 uppercase font-extrabold tracking-widest text-sm px-8 py-3 hover:bg-c-blue-200 transition duration-150 shadow-md" href="{!! $link['url'] !!}" target="_blank">{!! $link['title'] !!}</a>
    </div>
  </div>
</div>
