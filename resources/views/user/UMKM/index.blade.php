<x-layout.user-layout>
    <section class="max-w-6xl mx-auto font-sans">
        <div class="header bg-cover rounded-xl bg-no-repeat relative my-8 mx-auto h-[29vw]"
            style="background-image: url(/assets/images/illustration/mieayam.webp);">
            <div
                class="header-content absolute flex flex-col items-end gap-6 max-w-[50%] bottom-[10%] right-[6vw] animate-fadein3s">
                <h2 class="font-medium text-right text-white text-7xl">Order your favorite food here</h2>
                <p class="text-sm text-right text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Praesentium,
                    accusamus odit
                    aperiam numquam</p>
                <button
                    class="border-none items-end text-[#747474] font-medium py-3 px-6 bg-white text-sm rounded-[50px]">Detail
                    Showcase</button>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto font-sans">
        <div class="explore-menu flex flex-col gap-5">
            <h1 class="text-[#262626] dark:text-white text-2xl font-semibold">Menjelajah UMKM</h1>
            <p class="explore-menu-text
                max-w-[60%] ">Selamat menjelajahi Kuliner di Lingkungan RW 2,
                tempat di mana setiap gigitan membawa Anda pada petualangan rasa yang tak terlupakan. Temukan hidangan
                favorit Anda dan nikmati kelezatan kuliner Malang dalam genggaman tangan</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto font-sans">
        <div class="display mt-8">
            <div class="py-5 mt-3">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <form action="" method="get" class="flex">
                        <div>
                            <button id="filterButton" data-dropdown-toggle="filter"
                                class="h-full inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg  px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <span class="sr-only">Action button</span>
                                Filter
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="filter"
                                class="z-9999 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                                <div id="accordion-collapse" data-accordion="collapse">
                                    <h2 id="accordion-collapse-heading-1">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-2 font-medium text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                                            aria-controls="accordion-collapse-body-1">
                                            <span>Kategori</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-1" class="hidden"
                                        aria-labelledby="accordion-collapse-heading-1">
                                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                            @foreach ($kategori as $item)
                                                <div class="flex items-center my-2">
                                                    <input id="kategori-{{ $item->id_kategori }}" type="checkbox"
                                                        value="{{ $item->id_kategori }}" name="kategori[]"
                                                        value="{{ $item->id_kategori }}"
                                                        class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="kategori-{{ $item->id_kategori }}"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->nama_kategori }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="search" name="s"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                            placeholder="Cari UMKM">
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-purple-500 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-700 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Search</button>
                    </form>
                </div>
            </div>
            <div class="display-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 gap-y-13 mt-8">
                @foreach ($umkm as $item)
                    <a href="{{ route('user.umkm.detail', $item->id_umkm) }}">
                        <div class="group relative">
                            <div
                                class="{{ $item->tokoBuka() ? 'hidden' : '' }} absolute bg-slate-950 rounded-2xl w-full h-full opacity-30">
                            </div>
                            <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                                <div class="item-img pb-5">
                                    <img class="w-auto rounded-t-lg h-[200px] object-cover"
                                        src="{{ $item->getCover() }}" alt="">
                                </div>
                                <div class="item-info p-5">
                                    <div class="item-rating flex justify-between items-center mt-3">
                                        <p class="text-xl font-medium">{{ $item->textcut() }}</p>
                                        {{-- <img class="w-18" src="assets/images/umkm/rating_starts.png" alt=""> --}}
                                    </div>
                                    <p class="item-desc text-gray-600 text-xs">{{ $item->generateCuplikan() }}</p>

                                    <div
                                        class="item price group-hover:text-indigo-900 text-ungu text-sm font-medium my-3">
                                        Selengkapnya
                                    </div>
                                </div>
                                <div
                                    class="{{ $item->tokoBuka() ? 'hidden' : '' }} opacity-100 absolute justify-center w-full bottom-[60%] flex">
                                    <p
                                        class="text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                        TUTUP</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <div class="mt-90"></div>
</x-layout.user-layout>
