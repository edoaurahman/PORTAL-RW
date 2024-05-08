<x-layout.user-layout>
    <section class="slider max-w-6xl mx-auto font-sans pb-12 pt-[100px]">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-52 md:h-[468px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/images/umkm/umkm4.jpg" loading="lazy"
                        class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/images/umkm/umkm5.jpg" loading="lazy"
                        class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/images/umkm/umkm3.jpeg" loading="lazy"
                        class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/images/umkm/umkm2.jpeg" loading="lazy"
                        class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/images/umkm/umkm1.jpeg" loading="lazy"
                        class=" object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
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

    </section>

    <section class="DataDiri max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-1 gap-y-10
            ">
                <div class="gap-y-2 flex flex-col">
                    <div class="title">
                        <h3 class="flex items-center text-5xl font-extrabold dark:text-white">Data diri penduduk<span
                                class="bg-blue-100 text-blue-800 text-[25px] font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">{{ $penduduk->status_penduduk }}</span>
                        </h3>

                        <p class="text-base font-normal text-gray-500 lg:text-base pt-3 dark:text-gray-400">Ini adalah
                            profil
                            lengkap penduduk RW 2 Arjosari, yang mencakup informasi pribadi, alamat, status
                            kependudukan, dan data penting lainnya yang relevan untuk keperluan administratif dan sosial
                            di wilayah tersebut.</p>
                    </div>
                    <div class="flex flex-row justify-between gap-5  pt-5">
                        <div class="flex flex-1">
                            <dl
                                class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                <div class="flex flex-col pb-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->nama }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tempat, tanggal lahir
                                    </dt>
                                    <dd class="text-lg font-semibold">
                                        {{ $penduduk->tempat_lahir . ', ' . $penduduk->tgl_lahir }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jenis Kelamin
                                    </dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->jenis_kelamin }}</dd>
                                </div>
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Agama</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->agama }}</dd>
                                </div>


                            </dl>
                        </div>
                        <div class="flex flex-1">
                            <dl
                                class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                <div class="flex flex-col pb-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Pekerjaan</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->pekerjaan }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">status perkawinan</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->status_perkawinan }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor hanphone</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->no_hp }}</dd>
                                </div>
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Alamat</dt>
                                    <dd class="text-lg font-semibold">
                                        {{ $penduduk->alamat->jalan . ' RT' . $penduduk->alamat->rt . ' RW' . $penduduk->alamat->rw . ', ' . $penduduk->alamat->kel . ' ' . $penduduk->alamat->kecamatan }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/home/illustration.png') }}" alt="" class="h-[550px]">
            </div>
        </div>
    </section>


    <section class="umkm mx-auto font-sans py-12">
        <div class="flex flex-col gap-y-8">
            <div class="gap-y-2 flex flex-col text-center">
                <h1 class="text-black1 font-bold text-5xl leading-tight">Profil UMKM
                </h1>
                <div class="text-base leading-loose text-black3 items-center">
                    Di sini, Anda dapat melihat detail tentang bisnis, termasuk informasi kontak, <br> deskripsi
                    usaha,
                    dan data penting lainnya yang membantu memperkuat identitas dan visi bisnis.
                </div>
            </div>
            <div class="flex flex-col gap-7">
                <div class="flex flex-wrap gap-x-10 justify-center">
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_1.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_2.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_3.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_4.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-7">
                <div class="flex flex-wrap gap-x-10 justify-center">
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_1.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_2.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_3.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_4.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <!-- Header start -->
    <div class="w-full">

        <div class="container py-10 px-4 mx-auto w-[90%] md:w-full">
            <div class="grid grid-cols-1 lg:grid-cols-8 sm:gap-4 sm:mb-11 md:grid-cols-10">
                <!-- ###################### -->
                <!-- Colom 1 -->
                <!-- ###################### -->
                <div class="font-sans lg:col-span-6 md:col-span-6">
                    <div class="col-span-2 ">
                        <h1
                            class="flex items-center  text-2xl uppercase font-extrabold text-slate-700 group-hover:text-white dark:text-white dark:group-hover:text-dark_grey5">
                            <span>Abid</span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-dark_grey4 dark:text-slate-100 ms-2 dark:group-hover:bg-gray-600">Lantai</span>
                        </h1>
                    </div>
                    <!-- Fasilitas start -->
                    <div class="flex sm:flex-wrap sm:justify-start flex-nowrap overflow-x-auto pb-3 pt-8">
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-wifi my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Wifi 40 Mbps</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-bars-progress my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Proyektor</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-desktop my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Monitor</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-plug my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Stop Kontak</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-chalkboard my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Papan Tulis</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-chair my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Kursi</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-table my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Meja</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-marker my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Spidol</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-eraser my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Penghapus</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div
                            class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i
                                class="fa-solid fa-book my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Perpustakaan Kecil</p>
                            </div>
                        </div>

                    </div>
                    <!-- Fasilitas end -->
                    <!-- Description Start  -->
                    <div class="deskripsi">
                        <p class="text-gray-500 dark:text-gray-300 mt-8">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                            consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                            odio dignissim qui blandit praesent .</p>
                        <div
                            class="hs-collapse hidden sm:block w-full overflow-hidden transition-[height] duration-300">
                            <ul class="pl-1 pt-4 text-gray-500 dark:text-gray-300">
                                <li class="my-auto leading-7 "><i class="fa-solid fa-circle-chevron-right "></i><span
                                        class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit
                                        amet.</span></li>
                                <li class="my-auto leading-7"><i class="fa-solid fa-circle-chevron-right "></i><span
                                        class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit
                                        amet.</span></li>
                                <li class="my-auto leading-7"><i class="fa-solid fa-circle-chevron-right "></i><span
                                        class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit
                                        amet.</span></li>
                            </ul>

                            <p class="pt-4 text-gray-500 dark:text-gray-300">consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <!-- Description End  -->

                    <!-- refisi perbandingan start -->
                    <div class="mt-7">
                        <div class="Denah mt-5">
                            <h2 class="text-gray-600 font-sans font-bold text-xl dark:text-gray-100">Denah Lantai
                            </h2>
                            <div class="flex flex-col gap-2  pb-6 pt-6">
                                <!-- fasilitas 1 -->
                                <div
                                    class="flex flex-initial w-64  text-gray-500  border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-list-ol mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Lift Bersama
                                    </p>
                                </div>
                                <!-- fasilitas 2 -->
                                <div
                                    class="flex  flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-stairs mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Bersama
                                    </p>
                                </div>
                                <!-- fasilitas 3 -->
                                <div
                                    class="flex flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-tower-broadcast mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Darurat
                                    </p>
                                </div>
                            </div>
                            <img width="45px" src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        </div>
                    </div>
                    <!-- refisi perbandingan end -->

                </div>
            </div>
        </div>
    </div> --}}

    <div class="mt-90"></div>
</x-layout.user-layout>
