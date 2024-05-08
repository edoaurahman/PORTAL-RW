<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
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
                        We provide a variety of servers to grow your users <br>
                        acquisition much user-friendly and boosting up sales.
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
                <img src="{{ asset('assets/images/home/iklan/logo1.png') }}" alt="">
            </div>
            <div class="iklan-2 flex items-center gap-x-3 font-bold text-2xl">
                <img src="{{ asset('assets/images/home/iklan/logo1.png') }}" alt="">
            </div>
            <div class="iklan-3 flex items-center gap-x-3 font-bold text-2xl">
                <img src="{{ asset('assets/images/home/iklan/logo1.png') }}" alt="">
            </div>
            <div class="iklan-4 flex items-center gap-x-3 font-bold text-2xl">
                <img src="{{ asset('assets/images/home/iklan/logo1.png') }}" alt="">
            </div>
            <div class="iklan-5 flex items-center gap-x-3 font-bold text-2xl">
                <img src="{{ asset('assets/images/home/iklan/logo1.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="features max-w-6xl mx-auto py-12 font-sans">
        <h3 class="text-black1 font-bold text-5xl text-center mb-8">Ketua RT</h3>
        <div class="grid grid-cols-4 gap-x-8 px-5">
            <div class="my-card relative bg-black1 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <div class="z-1 flex flex-col items-start gap-y-8">
                    <i class="fa-solid fa-shield-halved text-5xl text-white"></i>
                    <div class="flex flex-col gap-y-1">
                        <h3 class=" text-2xl font-bold text-white">
                            RT 001
                        </h3>
                        <div class="text-base leading-relaxed text-black4">
                            Bpk. Sutrisno <br>
                            RW 2, RT 1, No 24. Desa Arjosari, Kecamatan Singosari, Kabupaten Malang
                        </div>
                    </div>
                </div>
                <div class="absolute top-5 right-5">
                    <img src="{{ asset('assets/images/Home/Ellipse 2.png') }}" alt="">
                </div>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        RT 002
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Bpk. Anang <br>
                        RW 2, RT 1, No 24. Desa Arjosari, Kecamatan Singosari, Kabupaten Malang
                    </div>
                </div>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        RT 003
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Bpk. Edo <br>
                        RW 2, RT 1, No 24. Desa Arjosari, Kecamatan Singosari, Kabupaten Malang
                    </div>
                </div>
            </div>
            <div class="my-card bg-white flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        RT 004
                    </h3>
                    <div class="text-base leading-relaxed text-black3">
                        Bpk. Jaki <br>
                        RW 2, RT 1, No 24. Desa Arjosari, Kecamatan Singosari, Kabupaten Malang
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefit max-w-6xl mx-auto font-sans py-12">
        <div class="grid grid-cols-2 items-center gap-x-10">
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/home/illustration_2.png') }}" alt="" class="h-[550px]">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-black1 font-bold text-5xl leading-tight">Kerja Bakti
                        Serentak Seluruh RT
                    </h1>
                    <div class="text-base leading-loose text-black3">
                        kegiatan gotong royong yang dilakukan secarab bersama-sama oleh seluruh warga di tingkat RT
                        untuk membersihkan lingkungan dan memperbaiki infrastruktur.
                    </div>
                </div>

                <div class="flex flex-col gap-y-10">
                    <div class=" flex flex-row bg-white rounded-2xl p-5 w-full items-center gap-x-4">
                        <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                        <div class="flex flex-col ">
                            <h3 class=" text-2xl font-bold text-black1">
                                Meningkatnya kebersihan lingkungan
                            </h3>
                            <div class="text-base leading-relaxed text-black4">
                                Melalui kerja bakti serentak, sampah-sampah dapat dibersihkan secara efektif, menjadikan
                                lingkungan lebih bersih dan nyaman untuk ditinggali.
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-row bg-white rounded-2xl p-5 items-center gap-x-4">
                        <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                        <div class="flex flex-col ">
                            <h3 class=" text-2xl font-bold text-black1">
                                Penguatan hubungan sosial
                            </h3>
                            <div class="text-base leading-relaxed text-black4">
                                Melalui kerja bakti, warga memperkuat ikatan sosial dan menciptakan rasa kebersamaan
                                yang lebih kuat dalam komunitas.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row gap-x-4 items-center">
                    <a href="#"
                        class="hover:bg-indigo-900 text-base bg-ungu text-white py-4 px-10 rounded-full font-semibold">Explore
                        More</a>
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
                <h1 class="text-black1 font-bold text-5xl leading-tight">UMKM RW 2
                </h1>
                <div class="text-base leading-loose text-black3 items-center">
                    They built amazing website to help more people around the world <br>by using our recommendation
                    services
                    and products
                </div>
            </div>
            <div class="flex flex-col gap-7">
                <div class="flex flex-wrap gap-x-10 justify-center">
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm1.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm2.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm3.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm4.jpeg') }}" alt=""
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
                        <img src="{{ asset('assets/images/umkm/umkm1.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm1.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm1.jpeg') }}" alt=""
                            class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                        <div
                            class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                            <a href="#"
                                class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">view
                                Details</a>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('assets/images/umkm/umkm1.jpeg') }}" alt=""
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

    <section class="closing font-sans mx-auto max-w-6xl bg-ungu p-14 rounded-3xl z-20 relative">
        <div class="grid grid-cols-2 gap-x-10">
            <div class="flex flex-col gap-y-10">

                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-white font-bold text-5xl leading-tight">Layanan Bersama
                    </h1>
                    <div class="text-base leading-loose text-white">
                        sebuah layanan berupa template form yang nantinya membantu
                        setiap proses pelayanan bersama RW
                    </div>
                </div>
                <div class="flex flex-row gap-x-4 items-center">
                    <a href="#"
                        class="hover:bg-indigo-900 text-base bg-kuning text-black1 py-4 px-10 rounded-full font-semibold">Selengkapnya
                    </a>
                    <a href="#" class="gap-x-2 flex items-center text-white font-semibold text-base">
                        <i class="fa-solid fa-message"></i>
                        Unduh Surat
                    </a>
                </div>

                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium dark:text-gray-900 text-white">kirimkan
                        aspirasimu</label>

                    <form class="max-w-sm mx-auto">
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="tulis aspirasi disini..."></textarea>
                    </form>

                </div>
                <div>
                    <button type="submit"
                        class="text-black bg-kuning hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">kirim
                        aspirasi</button>

                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-5 gap-y-5">
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Perpindahan Penduduk</h3>
                        <a href="#"
                            class="group-hover:opacity-100 opacity-0 text-base font-semibold text-gray-500">Gunakan
                            layanan</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Perpindahan Penduduk</h3>
                        <a href="#"
                            class="group-hover:opacity-100 opacity-0 text-base font-semibold text-gray-500">Gunakan
                            layanan</a>
                    </div>
                </div>

                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Perpindahan Penduduk</h3>
                        <a href="#"
                            class="group-hover:opacity-100 opacity-0 text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
                <div
                    class="group closing-card-feature flex flex-col justify-center bg-white hover:bg-black1 p-5 rounded-2xl gap-y-5">
                    <i class="fa-solid fa-shield-halved text-4xl  text-ungu group-hover:text-white"></i>
                    <div class="flex flex-col items-center">
                        <h3 class="font-bold text-lg text-black1 group-hover:text-white">Perpindahan Penduduk</h3>
                        <a href="#"
                            class="group-hover:opacity-100 opacity-0 text-base font-semibold text-gray-500">Learn
                            More</a>
                    </div>
                </div>
            </div>
    </section>

    <div class="h-[100px]"></div>
</x-layout.user-layout>
