<div class="news-section pt-8 md:pt-0 md:pb-8 lg:pb-0 xl:pt-4 xl:pb-8">
  <div class="container mx-auto px-6 lg:px-8">
  <h2 class="text-center text-c-blue-200 text-2xl font-semibold mb-8 md:text-3xl lg:mb-12">{!! $title !!}</h2>
    <div class="news-carousel flickity-resize relative focus:outline-none">
      @foreach($posts as $post)

        <div class="carousel-cell relative w-full bg-white border border-gray-200 ml-8 border-solid rounded-md focus:outline-none flex flex-col md:flex-row md:shadow-lg lg:ml-12">
          <div class="md:w-1/2 md:relative">
            <img class="object-cover object-center w-full h-56 md:h-full md:absolute" src="{!! $post['image'] !!}" alt="">
          </div>
          <div class="flex-grow md:w-1/2">
            <div class="p-6 pb-8 lg:p-8 lg:pb-12">
              <a class="text-c-blue-200 hover:text-c-orange-100" href="{!! $post['link'] !!}" target="_blank">
                <h3 class="text-xl font-semibold mb-2 lg:text-2xl">{!! $post['title'] !!}</h3>
              </a>
              <p class="mb-4 lg:text-lg">{!! $post['content'] !!}</p>
              <a class="text-c-teal-100 flex items-center font-semibold hover:text-c-orange-100" href="{!! $post['link'] !!}" target="_blank">
                <span>Read More</span>
                <svg class="fill-current h-6 w-6 ml-2" height="1" width="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>

      @endforeach
    </div>
  </div>
</div>

{{-- @dump($posts) --}}