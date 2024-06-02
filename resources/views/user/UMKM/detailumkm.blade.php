<x-layout.user-layout>
    <!-- Detail -->
    <div class="detail dark:bg-dark_grey1">
        <!-- Header start -->
        <div class="w-full">
            <!-- header desktop start -->
            <div class="slider">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden h-52 md:h-[468px]">
                        <!-- Item 1 -->
                        @foreach ($umkm->gambar as $item)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ $item->getSlideUMKM() }}" loading="lazy"
                                    class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
            <!-- Header end -->
            <div class="container py-10 px-4 max-w-6xl mx-auto md:w-full">
                <div class="font-sans">
                    <div class="col-span-2 ">
                        <h1
                            class="flex items-center  text-2xl uppercase font-extrabold text-slate-700 group-hover:text-white dark:text-white dark:group-hover:text-dark_grey5">
                            <span>{{ $umkm->nama_umkm }}</span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-dark_grey4 dark:text-slate-100 ms-2 dark:group-hover:bg-gray-600">Rt
                                {{ $umkm->penduduk->alamat->rt }}</span>
                        </h1>
                        <div class="flex">
                            @foreach ($umkm->listkategori as $item)
                                @if ($loop->last)
                                    <p class="text-xs">{{ $item->kategori->nama_kategori }}</p>
                                @else
                                    <p class="text-xs">{{ $item->kategori->nama_kategori }}, &nbsp;</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Fasilitas start -->
                    <div class="flex sm:flex-wrap sm:justify-start flex-nowrap overflow-x-auto pb-3 pt-8">
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-wifi my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Toko Fisik</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-bars-progress my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Toko Online</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-desktop my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Halal</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-plug my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Pelayanan</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-chalkboard my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Wifi</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-chair my-auto mr-2 p-3 bg-ungu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Toilet</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fasilitas end -->
                    <!-- Description Start  -->
                    <div class="deskripsi">
                        <div class="px-4 lg:px-0 mt-8 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                            <p class="mt-2">{!! $umkm->deskripsi !!}</p>
                        </div>
                    </div>
                    <!-- Description End  -->
                </div>
            </div>
        </div>
        <div class="mt-90"></div>
</x-layout.user-layout>
