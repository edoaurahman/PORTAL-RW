<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px]">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">
                <div class="w-fit gap-x-2 px-4 py-2 small-badge flex flex-row bg-white rounded-full items-center">
                    <i class="fa-solid fa-globe"></i>
                    <p class=" text-base font-semibold text-black2">
                        Kami memiliki jumlah penduduk lebih dari 1.000 jiwa.
                    </p>
                </div>
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-black1 font-bold text-[70px] leading-none">Tumbuh <br>
                        Bersama RW 02.
                    </h1>
                    <div class="text-base leading-loose text-black3">
                        RW 2, Desa Arjosari, <br>
                        Kecamatan Singosari, Kabupaten Malang.
                    </div>
                </div>
                <div class="flex flex-row gap-x-4 items-center">
                    <a href="#"
                        class="hover:bg-indigo-900 text-base bg-ungu text-white py-4 px-10 rounded-full font-semibold">Tanpa
                        Login</a>
                    <a href="#" class="gap-x-2 flex items-center text-ungu font-semibold text-base">
                        <i class="fa-solid fa-message"></i>
                        Unduh Surat
                    </a>
                </div>
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/home/illustration.png') }}" alt="" class="h-[550px]">
            </div>
        </div>
    </section>

    <section class="partners max-w-6xl mx-auto font-sans py-12">
        <div class="flex flex-row gap-x-10 items-center justify-center">
            <div class="iklan-1 flex items-center gap-x-3 font-bold text-2xl">
                <i class="fa-solid fa-1"></i>
                <p>Logo UMKM</p>
            </div>
            <div class="iklan-2 flex items-center gap-x-3 font-bold text-2xl">
                <i class="fa-solid fa-2"></i>
                <p>Logo UMKM</p>
            </div>
            <div class="iklan-3 flex items-center gap-x-3 font-bold text-2xl">
                <i class="fa-solid fa-3"></i>
                <p>Logo UMKM</p>
            </div>
            <div class="iklan-4 flex items-center gap-x-3 font-bold text-2xl">
                <i class="fa-solid fa-4"></i>
                <p>Logo UMKM</p>
            </div>
            <div class="iklan-5 flex items-center gap-x-3 font-bold text-2xl">
                <i class="fa-solid fa-5"></i>
                <p>Logo UMKM</p>
            </div>
        </div>
    </section>

    <section class="features max-w-6xl mx-auto py-12 font-sans">
        <h3 class="text-black1 font-bold text-5xl text-center mb-8">Layanan Warga</h3>
        <div class="grid grid-cols-4 gap-x-8 px-5">
            <div class="my-card relative bg-black1 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <div class="z-1 flex flex-col items-start gap-y-8">
                    <i class="fa-solid fa-shield-halved text-5xl text-white"></i>
                    <div class="flex flex-col gap-y-1">
                        <h3 class=" text-2xl font-bold text-white">
                            Pindah Masuk
                        </h3>
                        <div class="text-base leading-relaxed text-black4">
                            Lorem ipsum dolor sit amet consectetur
                        </div>
                    </div>
                    <a href="" class="text-base font-semibold text-white">Selengkapnya</a>
                </div>
                <div class="absolute top-5 right-5">
                    <img src="{{ asset('assets/images/home/Ellipse 2.png') }}" alt="">
                </div>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Meninggal Dunia
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                </div>
                <a href="" class="text-base font-semibold text-ungu">Selengkapnya</a>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        SKTM
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                </div>
                <a href="" class="text-base font-semibold text-ungu">Selengkapnya</a>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Izin menginap
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                </div>
                <a href="" class="text-base font-semibold text-ungu">Selengkapnya</a>
            </div>
        </div>
    </section>

    <section class="benefit max-w-6xl mx-auto font-sans py-12">
        <div class="flex flex-row items-center gap-x-18">
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/home/illustration_2.png') }}" alt="" class="h-[550px]">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-black1 font-bold text-5xl leading-tight">Seminar Warga <br>
                        Demi Keharmonisan <br>Masyarakat
                    </h1>
                    <div class="text-base leading-loose text-black3">
                        Penyampaian materi<br>
                        Oleh Mbak abid <br>mentor terbaik dari Malang
                        .
                    </div>
                </div>

                <div class="flex flex-col gap-y-10">
                    <div class=" flex flex-row bg-white rounded-2xl p-5 w-full items-center gap-x-4">
                        <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                        <div class="flex flex-col ">
                            <h3 class=" text-2xl font-bold text-black1">
                                25 Maret
                            </h3>
                            <div class="text-base leading-relaxed text-black4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-row bg-white rounded-2xl p-5 items-center gap-x-4">
                        <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                        <div class="flex flex-col ">
                            <h3 class=" text-2xl font-bold text-black1">
                                Di Balai Warga
                            </h3>
                            <div class="text-base leading-relaxed text-black4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row gap-x-4 items-center">
                    <a href="#"
                        class="hover:bg-indigo-900 text-base bg-ungu text-white py-4 px-10 rounded-full font-semibold">Selengkapnya</a>
                    <a href="#" class="gap-x-2 flex items-center text-ungu font-semibold">
                        <i class="fa-solid fa-message"></i>
                        Schedule a Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="umkm mx-auto font-sans py-12">
        <div class="flex flex-col gap-y-8">
            <div class="gap-y-2 flex flex-col text-center">
                <h1 class="text-black1 font-bold text-5xl leading-tight">UMKM Warga
                </h1>
                <div class="text-base leading-loose text-black3 items-center">
                    They built amazing website to help more people around the UMKM <br>by using our recommendation
                    services
                    and products
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
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_2.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_3.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_4.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Selengkapnya</a>
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
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_2.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_3.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                Selengkapnya</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/home/Rectangle_4.png') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="closing font-sans mx-auto max-w-6xl bg-ungu p-14 rounded-3xl">
        <div class="grid grid-cols-2 gap-x-10">
            <div class="flex flex-col gap-y-10">
                <div class="w-fit gap-x-2 px-4 py-2 small-badge flex flex-row bg-white rounded-full items-center">
                    <i class="fa-solid fa-globe"></i>
                    <p class=" text-base font-semibold text-black2">
                        We host more than 120,000 websites
                    </p>
                </div>
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-white font-bold text-5xl leading-tight">Start Growing Today
                    </h1>
                    <div class="text-base leading-loose text-white">
                        We provide a variety of servers to grow your users <br>
                        acquisition much user-friendly and boosting up sales.
                    </div>
                </div>
                <div class="flex flex-row gap-x-4 items-center">
                    <a href="#"
                        class="hover:bg-indigo-900 text-base bg-kuning text-black1 py-4 px-10 rounded-full font-semibold">Explore
                        More
                    </a>
                    <a href="#" class="gap-x-2 flex items-center text-white font-semibold text-base">
                        <i class="fa-solid fa-message"></i>
                        Unduh Surat
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-x-5 gap-y-5">
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Web Crawl</h3>
                        <a href="#" class="group-hover:block hidden text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="h-[100px]"></div>
</x-layout.user-layout>