<x-layout.user-layout>
    <div class="dark:bg-[#1f1345]">
        {{-- <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">
                <div class="w-fit gap-x-2 px-4 py-2 small-badge flex flex-row bg-purple-500 rounded-full items-center">
                    <!-- <i class="fa-solid fa-globe"></i> -->
                    <p class=" text-base font-semibold text-white">
                        Lingkungan yang berisi lebih dari 1000 jiwa.
                    </p>
                </div>
                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-black1 dark:text-purple-50 text-[35px] leading-none">
                        Bersatu dalam <b>Keberagaman</b>, <br>
                        Harmoni dalam <b> Kebersamaan</b>.</h1>
                    <div class="text-[20px] leading-loose text-black3 dark:text-purple-100">
                        RW 2 Desa Arjosari<br>
                        Kecamatan Blimbing.
                    </div>
                </div>
                <!-- <div class="flex flex-row gap-x-4 items-center">
                    <a href="#" class="hover:bg-indigo-900 text-base bg-ungu text-white py-4 px-10 rounded-full font-semibold">Tanpa
                        Login</a>
                    <a href="#" class="gap-x-2 flex items-center text-ungu font-semibold text-base">
                        <i class="fa-solid fa-message"></i>
                        Unduh Surat
                    </a>
                </div> -->
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/illustration/warga.webp') }}" alt="" class="h-[550px]">
            </div>
        </div>
    </section> --}}

        <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col flex-1 gap-y-10">
                    <div class="gap-y-6 flex flex-col">
                        <h1 class="text-black1 font-bold text-[70px] leading-none dark:text-white">
                            Tumbuh<br>
                            <span class="dark:text-biru">Bersama RW 02.</span>
                        </h1>
                        <div class="text-base leading-loose text-black3 dark:text-white">
                            Web digital untuk mencatat dan mengelola data warga RW 02 (nama, alamat, tanggal lahir).
                            Antarmuka user-friendly mempercepat akses informasi, mendukung administrasi, layanan sosial,
                            pencarian cepat, dan laporan statistik.
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-4 items-center">
                        <a href="{{ route('user.layanan') }}"
                            class="hover:bg-indigo-900 text-base bg-ungu text-white py-4 px-10 rounded-full font-semibold dark:bg-biru dark:hover:bg-white dark:hover:text-biru">Surat
                            Pengantar</a>
                        <a href="{{ route('user.penduduk') }}"
                            class="gap-x-2 flex items-center text-ungu font-semibold text-base dark:text-biru dark:hover:text-white">
                            <i class="fa-solid fa-user"></i>
                            Penduduk RW 02
                        </a>
                    </div>
                </div>
                <div class="flex flex-row item-center">
                    <img src="{{ asset('assets/images/illustration/warga.webp') }}" alt="" class="h-[550px]">
                </div>
            </div>
        </section>

        {{-- <section class="partners max-w-6xl mx-auto font-sans py-12">
        <div class="flex flex-row gap-x-10 items-center justify-center">
            <div class="iklan-2 flex items-center gap-x-3 font-bold text-2xl w-30 mx-10">
                <img src="{{ asset('assets/images/illustration/kotamalang.png') }}" alt="">
            </div>
            <div class="iklan-3 flex items-center gap-x-3 font-bold text-2xl w-20 mx-20">
                <img src="{{ asset('assets/images/illustration/polsek.png') }}" alt="">
            </div>
            <div class="iklan-4 flex items-center gap-x-3 font-bold text-2xl w-20 mx-20">
                <img src="{{ asset('assets/images/illustration/jatim.png') }}" alt="">
            </div>
        </div>
    </section> --}}

        <section class="features max-w-6xl mx-auto py-12 font-sans">
            <div class="grid grid-cols-3 gap-x-8 px-5">
                <div class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-8 items-start rounded-2xl p-10">
                    <i class="fa-solid fa-broom text-5xl text-ungu dark:text-biru"></i>
                    <div class="flex flex-col gap-y-5">
                        <h3 class=" text-2xl font-bold dark:text-white">
                            Kebersihan
                        </h3>
                        <div class="text-base leading-relaxed text-black3  dark:text-paragraf">
                            Rutinitas bersih lingkungan bulanan dan petugas kebersihan harian membuat RW 02 selalu
                            bersih
                            dan nyaman.</div>
                    </div>
                </div>
                <div class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-8 items-start rounded-2xl p-10">
                    <i class="fa-solid fa-lock text-5xl text-ungu dark:text-biru"></i>
                    <div class="flex flex-col gap-y-5">
                        <h3 class=" text-2xl font-bold dark:text-white">
                            Keamanan
                        </h3>
                        <div class="text-base leading-relaxed text-black3  dark:text-paragraf">
                            Satpam Linmas berjaga 24 jam dan berbagai peraturan yang ketat membuat RW 02 lebih aman dan
                            nyaman.</div>
                    </div>
                </div>
                <div class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-8 items-start rounded-2xl p-10">
                    <i class="fa-solid fa-gear text-5xl text-ungu dark:text-biru"></i>
                    <div class="flex flex-col gap-y-5">
                        <h3 class=" text-2xl font-bold dark:text-white">
                            Pelayanan
                        </h3>
                        <div class="text-base leading-relaxed text-black3  dark:text-paragraf">
                            Pelayanan masyarakat yang responsif dan fasilitas umum yang lengkap membuat RW 02 semakin
                            nyaman.</div>
                    </div>
                </div>
            </div>
        </section>


        <section class="benefit max-w-6xl mx-auto font-sans py-12">
            <div class="flex flex-row items-center gap-x-18">
                <div class="grid grid-cols-2 items-center gap-x-10">
                    <div class="flex flex-row item-center">
                        <img src="{{ asset('assets/images/home/illustration_2.png') }}" alt=""
                            class="h-[550px]">
                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="gap-y-2 flex flex-col">
                            <h1 class="text-black1 font-bold text-5xl leading-tight dark:text-white">Kepengurusan</h1>
                            <div class="text-base leading-loose text-black3 dark:text-paragraf">
                                "Kepengurusan RW 02 Kelurahan Arjosari" mencantumkan ketua RW dan RT, memudahkan warga
                                dalam
                                berkomunikasi dan berkoordinasi dengan pengurus.
                            </div>
                        </div>
                        <div
                            class="bg-purple-50 mt-4 mx-auto max-w-7xl px-6 rounded-lg shadow-md lg:px-8 lg:py-5 dark:bg-ungu_muda">
                            <div
                                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 border-gray-200  lg:mx-0 lg:max-w-none">
                                <article class="flex max-w-xl flex-col items-start justify-between">
                                    <div class="group relative">
                                        <h3
                                            class="mt-2 text-lg font-bold leading-6 text-black group-hover:text-gray-600 dark:text-white">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Rukun Warga
                                            </a>
                                        </h3>
                                        <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-paragraf">
                                            "Aktor-aktor di RW
                                            kami, dengan peran serta kontribusinya yang tak tergantikan, menjadi tulang
                                            punggung dalam memperkokoh dan mempertahankan kebersamaan serta harmoni di
                                            lingkungan".</p>
                                    </div>
                                    <div class="relative mt-4 flex items-center justify-end w-full  gap-x-4 py-5">
                                        <div class="text-sm leading-6 text-right">
                                            <p class="font-semibold text-gray-900 dark:text-white">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Michael Foster
                                                </a>
                                            </p>
                                            <p class="text-gray-600 dark:text-paragraf">Ketua Rw</p>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                    </div>
                                </article>

                                <!-- More posts... -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-row item-center">
                <img src="{{ $gambar_struktur->getGambar() }}" alt="" class=" mr-30 max-w-150">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class=" text-right gap-y-2 flex flex-col">
                    <h1 class="text-ungu dark:text-orange-100 font-bold text-[60px] leading-none">Struktur Kepengurusan
                    </h1>
                    <h1 class="text-black1 dark:text-purple-500 font-bold text-[60px] leading-none">
                        RW 2
                    </h1>
                </div>
            </div>
        </div>
    </section> --}}

        {{-- <section class="features max-w-6xl mx-auto py-12 font-sans">

        <h1 class="pb-5 text-center font-bold text-5xl leading-tight dark:text-whiten ">Mengutamakan
            Kenyamanan<br>Untuk
            Warga</h1>
        <!-- <h3 class="text-black1 font-bold text-5xl text-center mb-8">Ketua RT</h3> -->
        <div class="grid grid-cols-4 gap-x-8 px-5">

            <div class="my-card bg-white dark:bg-gray-700 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Kebersihan
                    </h3>
                    <div class="text-base leading-relaxed text-black3  dark:text-purple-200">
                        Adanya bersih Lingkungan Rutin Tiap Bulan dan petugas kebersihan yang bekerja setiap hari,
                        membuat lingkungan RW 2 selalu bersih dan nyaman</div>
                </div>
            </div>
            <div class="my-card bg-white dark:bg-gray-700 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Keamanan
                    </h3>
                    <div class="text-base leading-relaxed text-black3 dark:text-purple-200">
                        Satpam Linmas yang berjaga 24 jam dan berbagai peraturan yang telah ditetapkan, membuat
                        lingkungan RW 2 Lebih Aman</div>
                </div>
            </div>
            <div class="my-card bg-white dark:bg-gray-700 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Fasilitas
                    </h3>
                    <div class="text-base leading-relaxed text-black3 dark:text-purple-200">
                        Berbagai Fasilitas yang tersedia, memberikan rasa bangga tersendiri bagi warga RW 2 atas
                        pencapaiannya hingga saat ini</div>
                </div>
            </div>
            <div class="my-card bg-white dark:bg-gray-700 flex flex-col gap-y-8 items-start rounded-2xl px-5 py-[30px]">
                <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i>
                <div class="flex flex-col gap-y-1">
                    <h3 class=" text-2xl font-bold">
                        Layanan
                    </h3>
                    <div class="text-base leading-relaxed text-black3 dark:text-purple-200">
                        pengaduan dan keperluan yang dibutuhkan warga, selalu dilayani oleh Ketua RT dan RW sebaik
                        mungkin, sehingga memberikan kepuasan untuk warga</div>
                </div>
            </div>
        </div>
    </section> --}}

        <section class="benefit max-w-6xl mx-auto font-sans py-12">
            <h1 class="text-center font-bold text-5xl leading-tight dark:text-whiten">Kegiatan dan Agenda</h1>
            <div class="grid grid-cols-2 items-center gap-x-10">
                <div class="flex flex-row item-center">
                    <img src="{{ asset('assets/images/illustration/kalenderagenda.webp') }}" alt=""
                        class="h-[550px]">
                </div>
                <div class="flex flex-col gap-y-10 ">
                    <div class="bg-purple-100 dark:bg-gray-800 rounded-3xl">
                        <div class="gap-y-2 flex flex-col pl-5 pt-5">
                            <h1 class="text-black1 font-bold text-4xl leading-tight dark:text-white ">
                                {{ $agenda->title }}
                            </h1>
                            <div class="text-base leading-loose text-black3 dark:text-purple-200 pb-4">
                                {{ $agenda->deskripsi }}
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-10 pl-5 pr-5 pb-5">

                            <div class=" flex flex-row bg-white dark:bg-gray-700 rounded-2xl p-5 items-center gap-x-4">
                                {{-- <i class="fa-solid fa-shield-halved text-5xl text-ungu"></i> --}}
                                <div class="flex flex-col ">
                                    <h3 class=" text-2xl font-bold text-black1 dark:text-purple-100">
                                        Waktu
                                    </h3>
                                    <div class="text-base leading-relaxed text-black4 dark:text-purple-200">
                                        {{ $agenda->start . ' - ' . $agenda->end }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-4 items-center pl-5 ">
                        <a href="{{ route('user.agenda') }}"
                            class="hover:bg-indigo-900 text-base bg-purple-400  text-white py-4 px-10 rounded-full font-semibold">
                            Lainnya</a>

                    </div>
                </div>
            </div>
        </section>

        <section class="umkm mx-auto font-sans py-12">
            <div class="flex flex-col gap-y-8">
                <div class="gap-y-2 flex flex-col text-center">
                    <h1 class="text-black1 font-bold text-5xl leading-tight dark:text-whiten">UMKM
                    </h1>
                    <div class="text-base leading-loose text-black3 dark:text-white items-center">
                        They built amazing website to help more people around the world <br>by using our recommendation
                        services
                        and products
                    </div>
                </div>
                <div class="flex flex-col gap-7">
                    <div class="flex flex-wrap gap-x-10 justify-center">
                        @foreach ($umkm as $item)
                            @if ($item->tokoBuka())
                                <div class="group relative border border-purple-800 rounded-2xl">
                                    <img src="{{ $item->getCover() }}" alt=""
                                        class="transition-all ease-in-out duration-500 group-hover:border-4 border-ungu w-[320px] h-[220px] rounded-2xl">
                                    <div class="absolute justify-center w-full top-10 flex">
                                        <div
                                            class="bg-indigo-900 text-base   text-white w-full text-center  font-semibold ">
                                            {{ $item->nama_umkm }}</div>
                                    </div>
                                    <div
                                        class="group-hover:opacity-100 transition-all ease-in-out duration-500 opacity-0 absolute justify-center w-full bottom-8 flex">
                                        <a href="{{ route('user.umkm.detail', $item->id_umkm) }}"
                                            class="hover:bg-indigo-900 text-base shadow-2xl shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">Lihat
                                            Detail
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('user.umkm') }}"
                        class="hover:bg-indigo-900 text-base shadow-ungu bg-ungu text-white py-3 px-7 rounded-full font-semibold ">Lihat
                        UMKM Lainnya</a>
                </div>
            </div>
        </section>
        <section class="umkm mx-auto font-sans py-12">
            <div class="flex flex-col gap-y-8">
                <div class="gap-y-2 flex flex-col text-center">
                    <h1 class="text-black1 font-bold text-5xl dark:text-whiten leading-tight">Aspirasi Warga
                    </h1>
                    <div class="text-base leading-loose text-black3 dark:text-white items-center">
                        Suarakan Keluh Kesah Pesan dan Kesan mu <br>untuk membangun Lingkungan RW 2 Menjadi Lebih Baik
                    </div>
                    <div class="grid grid-cols-1 mx-auto sm:grid-cols-2 md:grid-cols-4 gap-8 gap-y-13">
                        @foreach ($aspirasi as $item)
                            <div class="flex flex-row gap-2.5">
                                <div
                                    class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 bg-purple-300 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Author :
                                        </span>
                                        <span
                                            class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->author }}</span>
                                    </div>

                                    <span class="text-sm font-normal text-start text-gray-500 dark:text-gray-400">pesan
                                        :
                                    </span>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                                        {{ $item->isi }}
                                    </p>
                                    <div
                                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 bg-purple-100 dark:bg-gray-500 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                        @if ($item->status == 'pending')
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-300">belum di
                                                respon</span>
                                        @else
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-300">Respon :
                                            </span>
                                            <span
                                                class="text-sm font-normal text-gray-500 dark:text-gray-300">{{ $item->respon }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="closing font-sans mx-auto max-w-6xl bg-ungu p-14 rounded-3xl z-20 relative">
            <div class="grid grid-cols-2 gap-x-10">
                <div class="flex flex-col gap-y-10">

                    <div class="gap-y-2 flex flex-col">
                        <h1 class="text-white font-bold text-3xl leading-tight">Kirimkan Aspirasimu!
                        </h1>
                        <div class="text-base leading-loose text-white">
                            memberikan wadah bagi warga untuk berpartisipasi aktif dalam peningkatan kualitas layanan
                            publik
                            dan mendukung transparansi serta akuntabilitas.
                        </div>
                    </div>
                </div>
                <div class="grid ">
                    <div class="">
                        <!-- <label for="email" class="block mb-2 text-2xl font-medium dark:text-gray-900 text-white">kirimkan -->
                        <!-- aspirasimu</label> -->

                        <form action="{{ route('user.aspirasi.store') }}" class="max-w-sm" method="post">
                            @csrf
                            <textarea name="aspirasi" id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                                placeholder="tulis aspirasi disini..."></textarea>

                            <button type="submit"
                                class="   my-2 text-white hover:bg-indigo-900  bg-kuning focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-400 dark:hover:bg-purple-700 dark:focus:ring-purple-800">kirim
                                aspirasi</button>
                        </form>
                    </div>
                </div>
        </section>

        <div class="h-[100px]"></div>
    </div>
</x-layout.user-layout>
