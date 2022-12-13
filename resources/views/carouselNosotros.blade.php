<section id="service" class="pattern-style-4">
    <div class="container raise-2">
        <h3 class="section-title mb-3 pb-3 text-center">Nosotros</h3>
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-md-6">
                    @foreach ($configuraciones as $configuracion)
                    <p class="mb-1 font-weight-bold"><span class="font-weight-normal pl-2 text-gray-700">{{$configuracion->descripcion}}</span></p>
                    @endforeach
                </div>
                <div class="col-md-6">  
                  <div id="default-carousel" class="relative" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-64 overflow-hidden rounded-lg md:h-64">
                        <!-- Item 1 -->
                        @foreach ($galeria_uno as $gu)
                          <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/storage/{{$gu->imagen}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="w-full">
                              <span class="absolute font-bold px-4 py-1 text-2xl w-full bg-primary text-dark capitalize">{{$gu->descripcion}}</span>
                            </div>
                          </div>
                        @endforeach
                        
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                  </div>
                </div>
            </div>
        </div>                  
    </div>
</section>