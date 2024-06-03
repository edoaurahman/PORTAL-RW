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
            <h1 class="text-[#262626] text-2xl font-semibold">Kuliner UMKM</h1>
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
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search-ruang" @input.debounce.750="fetchResults"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Nama UMKM ..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
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
