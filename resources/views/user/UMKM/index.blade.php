<x-layout.user-layout>
    <section class="max-w-6xl mx-auto font-sans">
        <div class="header bg-cover rounded-xl bg-no-repeat relative my-8 mx-auto h-[29vw]"
            style="background-image: url(assets/Images/illustration/mieayam.webp);">
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
            {{-- <hr class="my-2 mx-0 h-1 bg-slate-200 border-none"> --}}
        </div>
    </section>

    {{-- <section class="container py-10 px-4 mx-auto max-w-6xl md:w-full">
        <div class="grid grid-cols-1 lg:grid-cols-8 sm:gap-4 sm:mb-11 md:grid-cols-10">
            <div class="font-sans mt-8 lg:col-span-2 md:col-span-4 md:mt-0">
                <div class="font-sans mt-8 lg:col-span-2 md:col-span-4 md:mt-0">
                    <div
                        class="rounded text-gray-600 block text-center font-semibold text-sm border p-5 mb-10 dark:text-dark_grey3">
                        <p>Daftar UMKM RW 02</p>
                    </div>
                    <div class="sm:sticky top-24 p-3 border-2 dark:border-dark_grey2  rounded-md">
                        <div class=" items-center">
                            <h2 class="text-slate-700 dark:text-biru font-sans text-xl font-bold uppercase">Filter</h2>
                        </div>
                        <div class="filter pt-5 ">
                            <!-- === Booking lokasi Start === -->
                            <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                <div x-data="{ open: false }" class=" dark:border-dark_grey2">
                                    <button @click="open = ! open" id="buttonPilihLantai"
                                        class="rounded text-white bg-black hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center"
                                        type="button">
                                        Lokasi
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu lantai -->
                                    <div x-show="open" @click.outside="open = false"
                                        class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                        <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">d</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- === Booking lokasi END ===-->
                            <!-- === Pilihan kategori Start ===-->
                            <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                <div x-data="{ open: false }" class=" dark:border-dark_grey2">
                                    <button @click="open = ! open" id="buttonPilihLantai"
                                        class="rounded text-white bg-black hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center"
                                        type="button">
                                        kategori
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu lantai -->
                                    <div x-show="open" @click.outside="open = false"
                                        class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                        <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Makanan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- === Pilihan kategori Start ===-->
                            <!-- === Pilihan jam operasional Start ===-->
                            <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                <div x-data="{ open: false }" class=" dark:border-dark_grey2">
                                    <button @click="open = ! open" id="buttonPilihLantai"
                                        class="rounded text-white bg-black hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center"
                                        type="button">
                                        Jam operasional
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu lantai -->
                                    <div x-show="open" @click.outside="open = false"
                                        class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                        <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Makanan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- === Pilihan jam operasional Start ===-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

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
                    <div class="group relative">
                        <div class="absolute bg-slate-950 rounded-2xl w-full h-full opacity-30"></div>
                        <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                            <div class="item-img pb-5">
                                <img class="w-auto rounded-t-lg" src="{{ $item->cover }}" alt="">
                            </div>
                            <div class="item-info p-5">
                                <div class="item-rating flex justify-between items-center mt-3">
                                    <p class="text-xl font-medium">{{ $item->nama_umkm }}</p>
                                    {{-- <img class="w-18" src="assets/Images/umkm/rating_starts.png" alt=""> --}}
                                </div>
                                <p class="item-desc text-gray-600 text-xs">{{ $item->deskripsi }}</p>
                                <div class="item price text-purple-700 text-sm font-medium my-3">Selengkapnya</div>
                            </div>
                            <div class="opacity-100 absolute justify-center w-full bottom-[60%] flex">
                                <p
                                    class="f text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                    TUTUP</p>
                            </div>
                        </div>

                    </div>
                @endforeach
                {{-- <div class="group relative">
                    <div class="absolute bg-slate-950 rounded-2xl w-full h-full opacity-30"></div>
                    <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                        <div class="item-img pb-5">
                            <img class="w-auto rounded-t-lg" src="assets/Images/umkm/food_2.png" alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium">Padang Murah</p>
                                <!-- <img class="w-18" src="assets/Images/umkm/rating_starts.png" alt=""> -->
                            </div>
                            <p class="item-desc text-gray-600 text-xs">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quos magnam blanditiis quis aperiam porro? </p>
                            <div class="item price text-purple-700 text-sm font-medium my-3">Selengkapnya</div>
                        </div>
                        <div class="opacity-100 absolute justify-center w-full bottom-[60%] flex">
                            <p
                                class="f text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                TUTUP</p>
                        </div>
                    </div>

                </div>
                <div class="group relative">
                    <div class="absolute bg-slate-950 rounded-2xl w-full h-full opacity-30"></div>
                    <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                        <div class="item-img pb-5">
                            <img class="w-auto rounded-t-lg" src="assets/Images/umkm/food_3.png" alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium">Padang Murah</p>
                                <!-- <img class="w-18" src="assets/Images/umkm/rating_starts.png" alt=""> -->
                            </div>
                            <p class="item-desc text-gray-600 text-xs">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quos magnam blanditiis quis aperiam porro? </p>
                            <div class="item price text-purple-700 text-sm font-medium my-3">Selengkapnya</div>
                        </div>
                        <div class="opacity-100 absolute justify-center w-full bottom-[60%] flex">
                            <p
                                class="f text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                TUTUP</p>
                        </div>
                    </div>

                </div>
                <div class="group relative">
                    <div class="absolute bg-slate-950 rounded-2xl w-full h-full opacity-30"></div>
                    <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                        <div class="item-img pb-5">
                            <img class="w-auto rounded-t-lg" src="assets/Images/umkm/food_4.png" alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium">Padang Murah</p>
                                <!-- <img class="w-18" src="assets/Images/umkm/rating_starts.png" alt=""> -->
                            </div>
                            <p class="item-desc text-gray-600 text-xs">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quos magnam blanditiis quis aperiam porro? </p>
                            <div class="item price text-purple-700 text-sm font-medium my-3">Selengkapnya</div>
                        </div>
                        <div class="opacity-100 absolute justify-center w-full bottom-[60%] flex">
                            <p
                                class="f text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                TUTUP</p>
                        </div>
                    </div>

                </div>
                <div class="group relative">
                    <div class="absolute bg-slate-950 rounded-2xl w-full h-full opacity-30"></div>
                    <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                        <div class="item-img pb-5">
                            <img class="w-auto rounded-t-lg" src="assets/Images/umkm/food_5.png" alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium">Padang Murah</p>
                                <!-- <img class="w-18" src="assets/Images/umkm/rating_starts.png" alt=""> -->
                            </div>
                            <p class="item-desc text-gray-600 text-xs">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quos magnam blanditiis quis aperiam porro? </p>
                            <div class="item price text-purple-700 text-sm font-medium my-3">Selengkapnya</div>
                        </div>
                        <div class="opacity-100 absolute justify-center w-full bottom-[60%] flex">
                            <p
                                class="f text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                TUTUP</p>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
    <div class="mt-90"></div>
</x-layout.user-layout>
