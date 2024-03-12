<x-layout.user-layout>
    {{-- header  --}}
    <div id="default-carousel" class="relative w-full " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[620px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/header-1.jpg') }}"
                    class="absolute block w-full
                    -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/header-2.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/header-3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- end header  --}}

    <div class="container mx-auto p-10">
        <div class="py-[0px] ">
            {{-- start About  --}}
            <div class="text-center font-serif pb-14">
                <h4 class="text-chocolate text-lg">Welcome To Apartio Real Estate</h4>
                <h2 class="text-black text-5xl">PROPERTY OVERVIEW</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 items-center">
                <div class="">
                    <img class="object-cover w-full md:h-72 md:w-full" src="{{ asset('assets/images/header-1.jpg') }}"
                        alt="">
                </div>
                <div class="">
                    <h2 class="mb-4 font-serif text-3xl font-medium tracking-tight text-black1">A Dream Living Space
                    </h2>
                    <p class="mb-3 font-serif font-normal text-base text-black2 ">Lorem ipsum dolor
                        sit amet
                        consectetur
                        adipisicing elit. Eos commodi minus non quasi consequatur distinctio animi, iusto, placeat,
                        inventore sunt in nisi consequuntur? Amet esse unde tempora deleniti laudantium molestias.
                        Reiciendis laboriosam nostrum, optio qui reprehenderit pariatur doloremque omnis repudiandae
                        repellat recusandae cum facere ratione perspiciatis, beatae rem debitis iusto possimus
                        sequi.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 items-center">
                <div class="">
                    <h2 class="mb-4 font-serif text-3xl font-medium tracking-tight text-black1">A Dream Living Space
                    </h2>
                    <p class="mb-3 font-serif font-normal text-base text-black2 ">Lorem ipsum dolor
                        sit amet
                        consectetur
                        adipisicing elit. Eos commodi minus non quasi consequatur distinctio animi, iusto, placeat,
                        inventore sunt in nisi consequuntur? Amet esse unde tempora deleniti laudantium molestias.
                        Reiciendis laboriosam nostrum, optio qui reprehenderit pariatur doloremque omnis repudiandae
                        repellat recusandae cum facere ratione perspiciatis, beatae rem debitis iusto possimus
                        sequi.</p>
                </div>
                <div class="">
                    <img class="object-cover w-full md:h-72 md:w-full" src="{{ asset('assets/images/header-1.jpg') }}"
                        alt="">
                </div>
                {{-- end About  --}}
            </div>
            {{-- start acara --}}
            <div class="text-center font-serif pb-14 pt-10">
                <h4 class="text-chocolate text-lg">Bergabunglah dalam kegiatan kesehatan, sosial, dan kebersamaan</h4>
                <h2 class="text-black text-5xl">ACARA - ACARA RW</h2>
            </div>
            {{-- end acara --}}
        </div>
    </div>


</x-layout.user-layout>
