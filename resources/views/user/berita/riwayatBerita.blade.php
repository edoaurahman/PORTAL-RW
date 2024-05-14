<x-layout.user-layout>

    <section class="hero max-w-6xl mx-auto font-sans py-20">
        <div class="px-4 py-6  dark:border-gray-600 dark:bg-gray-800">
            <div class="flex flex-col gap-y-4">
                <div class="gap-y-2 flex flex-row justify-between items-center">
                    <div class="flex-1 space-y-2">
                        <div class="w-fit gap-x-2  small-badge flex flex-row  rounded-full items-center">
                            <i class="fa-regular fa-newspaper"></i>
                            <p class=" text-base font-normal text-black">
                                Riwayat Unggahan Berita RW
                            </p>
                        </div>
                        <h2 class="font-bold text-black text-6xl">Mari tambahkan kabar terbaru </h2>
                    </div>
                    <div class=" flex-1 text-base leading-loose text-black3">
                        <p class="text-sm text-black3">
                            Tetaplah terinformasi dengan berita terbaru di wilayah RW kita. Ayo, tambahkan kabar terbaru
                            untuk berbagi informasi penting, kegiatan, dan perkembangan menarik dengan seluruh warga.
                            Klik tombol di bawah ini untuk mulai membuat berita baru dan berkontribusi dalam menjaga
                            komunitas kita tetap terhubung!
                        </p>
                        <div class="mt-7">
                            <a href="#"
                                class="hover:bg-indigo-900 text-sm bg-ungu text-white py-3 px-7  font-semibold">Tambah
                                Berita</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <section
        class="header px-4 py-6 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800 max-w-6xl mx-auto">
        <div class="md:flex md:justify-between md:space-x-10">
            <h3 class="md:flex md:flex-1 text-4xl md:text-7xl">let's learn to code an application</h3>
            <div class="content md:flex-1">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, praesentium. Nulla repellat ducimus
                    facilis,
                    vero dolor quaerat est odit commodi deleniti voluptatum officiis voluptatem omnis numquam, quam
                    aspernatur
                    libero debitis?
                </p>
                <div class="flex flex-row gap-x-4 items-center pt-5">
                    <a href="#"
                        class="hover:bg-indigo-900 text-sm bg-ungu text-white py-4 px-6 rounded-full font-semibold">Tambah
                        Berita</a>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="historyberita max-w-6xl mx-auto font-sans pb-12">
        <div id="alert-additional-content-2"
            class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
            role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">This is a danger alert</h3>
            </div>
            <div class="mt-2 mb-4 text-sm">
                More info about this info danger goes here. This example text is going to run a bit longer so that you
                can see how spacing within an alert works with this kind of content.
            </div>
            <div class="flex">
                <button type="button"
                    class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    View more
                </button>
                <button type="button"
                    class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800"
                    data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                    Dismiss
                </button>
            </div>
        </div>
        <div id="alert-additional-content-3"
            class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">This is a success alert</h3>
            </div>
            <div class="mt-2 mb-4 text-sm">
                More info about this info success goes here. This example text is going to run a bit longer so that you
                can see how spacing within an alert works with this kind of content.
            </div>
            <div class="flex">
                <button type="button"
                    class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    View more
                </button>
                <button type="button"
                    class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800"
                    data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                    Dismiss
                </button>
            </div>
        </div>
        <div id="alert-additional-content-4"
            class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
            role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">This is a warning alert</h3>
            </div>
            <div class="mt-2 mb-4 text-sm">
                More info about this info warning goes here. This example text is going to run a bit longer so that you
                can see how spacing within an alert works with this kind of content.
            </div>
            <div class="flex">
                <button type="button"
                    class="text-white bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-yellow-300 dark:text-gray-800 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    View more
                </button>
                <button type="button"
                    class="text-yellow-800 bg-transparent border border-yellow-800 hover:bg-yellow-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-800 dark:focus:ring-yellow-800"
                    data-dismiss-target="#alert-additional-content-4" aria-label="Close">
                    Dismiss
                </button>
            </div>
        </div>
    </div>

    <div class="mt-90"></div>
</x-layout.user-layout>
