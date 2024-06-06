<x-layout.user-layout>
    <div class="dark:bg-[#1f1345]">
        <div class="px-7 sm:max-w-6xl mx-auto font-sans">

            <section class="hero pb-12 pt-[100px] ">
                <div class="flex flex-col sm:flex-row items-center justify-between">
                    <div class="flex flex-col flex-1 gap-y-8 sm:gap-y-10">
                        <div class="gap-y-2 sm:gap-y-6 flex flex-col">
                            <h1 class="text-black1 font-bold text-5xl sm:text-[70px] leading-none dark:text-white">
                                Tumbuh<br>
                                <span class="dark:text-purple-700">Bersama RW 02.</span>
                            </h1>
                            <div class="text-sm sm:text-base leading-loose text-black3 dark:text-white">
                                Web digital untuk mencatat dan mengelola data warga RW 02. Antarmuka user-friendly
                                mempercepat akses informasi, mendukung metode oenerima bansos, layanan sosial, pencarian
                                cepat, dan laporan statistik.
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-4 items-center">
                            <a href="{{ route('user.layanan') }}"
                                class="hover:bg-indigo-900 text-sm sm:text-base bg-ungu text-white py-4 px-5 sm:py-4 sm:px-10 rounded-full font-semibold dark:bg-purple-700 dark:hover:bg-white dark:hover:text-purple-700">Surat
                                Pengantar</a>
                            <a href="{{ route('user.penduduk') }}"
                                class="gap-x-2 flex items-center text-ungu font-semibold text-base dark:text-purple-700 dark:hover:text-white">
                                <i class="fa-solid fa-user"></i>
                                Penduduk RW 02
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-row item-center hidden sm:block">
                        <img src="{{ asset('assets/images/illustration/warga.webp') }}" alt=""
                            class="h-[550px]">
                    </div>
                </div>
            </section>

            <section class="features py-12">
                <div class="grid grid-col sm:grid-cols-3 gap-y-3 gap-x-8 px-5">
                    <div
                        class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-4 sm:gap-y-8 items-start rounded-2xl p-7 sm:p-10">
                        <i class="fa-solid fa-broom text-4xl sm:text-5xl text-ungu dark:text-purple-700"></i>
                        <div class="flex flex-col gap-y-3 sm:gap-y-5">
                            <h3 class=" text-xl sm:text-2xl font-bold dark:text-white">
                                Kebersihan
                            </h3>
                            <div class="text-sm sm:text-base leading-relaxed text-black3  dark:text-paragraf">
                                Rutinitas bersih lingkungan bulanan dan petugas kebersihan harian membuat RW 02 selalu
                                bersih
                                dan nyaman.</div>
                        </div>
                    </div>
                    <div
                        class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-4 sm:gap-y-8 items-start rounded-2xl p-7 sm:p-10">
                        <i class="fa-solid fa-lock text-4xl sm:text-5xl text-ungu dark:text-purple-700"></i>
                        <div class="flex flex-col gap-y-3 sm:gap-y-5">
                            <h3 class="text-xl sm:text-2xl font-bold dark:text-white">
                                Keamanan
                            </h3>
                            <div class="text-sm sm:text-base leading-relaxed text-black3  dark:text-paragraf">
                                Satpam Linmas berjaga 24 jam dan berbagai peraturan yang ketat membuat RW 02 lebih aman
                                dan
                                nyaman.</div>
                        </div>
                    </div>
                    <div
                        class="my-card bg-white dark:bg-ungu_muda flex flex-col gap-y-4 sm:gap-y-8 items-start rounded-2xl p-7 sm:p-10">
                        <i class="fa-solid fa-gear text-4xl sm:text-5xl text-ungu dark:text-purple-700"></i>
                        <div class="flex flex-col gap-y-3 sm:gap-y-5">
                            <h3 class="text-xl sm:text-2xl font-bold dark:text-white">
                                Pelayanan
                            </h3>
                            <div class="text-sm sm:text-base leading-relaxed text-black3  dark:text-paragraf">
                                Pelayanan masyarakat yang responsif dan fasilitas umum yang lengkap membuat RW 02
                                semakin
                                nyaman.</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="OurTeam py-12">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center sm:gap-x-10">
                    <div class="flex flex-row item-center justify-center">
                        <img src="{{ $rw->penduduk->foto_profile() }}" alt=""
                            class="hidden sm:block sm:h-[500px] rounded-xl">
                    </div>
                    <div class="">
                        <div>
                            <h1
                                class="text-black font-extrabold text-3xl sm:text-5xl leading-tight pb-4 sm:pb-5 dark:text-white">
                                Ketua Rukun Warga
                            </h1>
                            <div class="text-sm sm:text-base sm:mt-4 leading-loose text-black3 dark:text-paragraf">
                                "Kepengurusan RW 02 Kelurahan Arjosari" mencantumkan ketua RW dan RT, memudahkan warga
                                dalam
                                berkomunikasi dan berkoordinasi dengan pengurus.
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <div class="flex mt-5 ">
                                <div class="w-1/2">
                                    <dl class="max-w-md text-gray-900  divide-gray-200 dark:text-white">
                                        <div class="flex flex-col pb-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                                            <dd class="text-lg font-semibold">{{ $rw->penduduk->nama }}</dd>
                                        </div>
                                        <div class="flex flex-col py-3">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Alamat</dt>
                                            <dd class="text-lg font-semibold">
                                                {{ $rw->penduduk->alamatLengkap() }}
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                                <div class="w-1/2">
                                    <dl
                                        class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">

                                        <div class="flex flex-col">
                                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor
                                                handphone
                                            </dt>
                                            <dd class="text-lg font-semibold">{{ $rw->penduduk->no_hp }}</dd>
                                        </div>

                                    </dl>
                                </div>
                            </div>
                            <button onclick="window.location.href='{{ route('user.detail', $rw->penduduk->nik) }}'"
                                class="hidden sm:block text-sm text-purple-700 py-2 mt-4 rounded-full font-semibold hover:text-white">Detail
                                Penduduk
                                <i class="fa-solid fa-arrow-right text-md"></i>
                            </button>
                        </div>
                        <div class="block sm:hidden">
                            <div class="flex mt-5 relative group ">
                                <div
                                    class="absolute flex justify-center items-center bg-indigo-900/0 group-hover:bg-indigo-900/80 w-full h-full transition ease-in-out duration-700 rounded-lg">
                                    <div class="hidden group-hover:block">
                                        <a onclick="window.location.href='{{ route('user.detail', $rw->penduduk->nik) }}'"
                                            class=" text-sm bg-ungu text-white py-4 px-5 my-3 rounded-2xl font-semibold dark:bg-purple-700 dark:hover:bg-white dark:hover:text-purple-700">Detail
                                            Penduduk
                                            <i class="fa-solid fa-arrow-right text-md"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="  ">
                                        <img src="{{ $rw->penduduk->foto_profile() }}" alt=""
                                            class="w-40 top-0 left-0 h-full object-cover object-center rounded-lg">
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="max-w-md text-gray-900 dark:text-white dark:divide-gray-700">
                                        <div class="flex flex-col">
                                            <dt class=" text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                                            <dd class="text-sm font-semibold">{{ $rw->penduduk->nama }}</dd>
                                        </div>
                                        <div class="flex flex-col py-2">
                                            <dt class=" text-gray-500 md:text-lg dark:text-gray-400">Alamat</dt>
                                            <dd class="text-sm font-semibold">
                                                {{ $rw->penduduk->alamatLengkap() }}
                                            </dd>
                                        </div>
                                        <div class="flex flex-col">
                                            <dt class=" text-gray-500 md:text-lg dark:text-gray-400">Nomor
                                                handphone
                                            </dt>
                                            <dd class="text-sm font-semibold">{{ $rw->penduduk->no_hp }}</dd>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" max-w-6xl mx-auto font-sans py-5 sm:py-20">
                <div class=" items-center">
                    <div>
                        <h1
                            class="pb-2 sm:pb-5 text-center font-bold text-4xl sm:text-5xl leading-tight dark:text-whiten ">
                            Daftar Ketua RT
                        </h1>
                        <p class="mt-4 text-center mx-auto lg:w-1/3 md:w-1/2">
                            Ketua RT adalah pemimpin yang dipilih warga untuk menjaga keharmonisan, mengoordinasikan
                            kegiatan, dan memastikan kebutuhan serta aspirasi warga terpenuhi.
                        </p>
                    </div>
                </div>
                <div class="mt-15">
                    <div class="swiper mySwiper !pb-17">
                        <div class="swiper-wrapper">
                            @foreach ($rt as $item)
                                <div class="swiper-slide">
                                    <div
                                        class="relative group overflow-hidden w-[270px] h-[330px] bg-white rounded-2xl">
                                        <div class="relative ">
                                            <div
                                                class="absolute bg-indigo-900/0 group-hover:bg-indigo-900/80 w-full h-full transition ease-in-out duration-700 skew-x-12 group-hover:skew-x-0 rotate-90 group-hover:rotate-0">
                                                <div class="flex h-full justify-center items-center gap-5">
                                                    <i
                                                        class="fa-solid fa-user text-white hover:text-indigo-900/80 hover:bg-white p-1 text-base hover:rounded-md opacity-0 group-hover:opacity-100 transition ease-linear delay-500"></i>
                                                    <i
                                                        class="fa-brands fa-whatsapp text-white hover:text-indigo-900/80 hover:bg-white p-1 text-base hover:rounded-md opacity-0 group-hover:opacity-100 transition ease-linear delay-500"></i>
                                                    <i
                                                        class="fa-solid fa-map text-white hover:text-indigo-900/80 hover:bg-white p-1 text-base hover:rounded-md opacity-0 group-hover:opacity-100 transition ease-linear delay-500"></i>
                                                </div>
                                            </div>

                                            <img class=" top-0 left-0 w-full h-full object-cover object-center"
                                                src="{{ $item->penduduk->foto_profile() }}" alt="member">
                                        </div>
                                        <div
                                            class="overflow-hidden p-4 bg-purple-100 group-hover:bg-white/70 absolute left-4 bottom-4 right-4 rounded-lg dark:bg-ungu_muda">
                                            <p class="font-bold text-center text-black dark:text-white">
                                                {{ $item->penduduk->nama }}
                                            </p>
                                            <p
                                                class="text-gray-500 text-center group-hover:text-gray-800 dark:text-paragraf">
                                                Ketua RT</p>
                                            <img class="absolute -left-10 -bottom-10"
                                                src="{{ asset('assets/images/illustration/circle.svg') }}"
                                                alt="circle">
                                            <img class="absolute -right-2 -top-4 w-9"
                                                src="{{ asset('assets/images/illustration/grid.svg') }}"
                                                alt="circle">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination absolute  !bottom-3"></div>
                    </div>
                </div>
            </section>

            <section class="agenda font-sans py-12">
                <h1 class="text-center font-bold text-4xl sm:text-5xl leading-tight dark:text-whiten">Kegiatan dan
                    Agenda</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center sm:gap-x-10">
                    <div class="flex flex-row item-center">
                        <img src="{{ asset('assets/images/illustration/kalenderagenda.webp') }}" alt=""
                            class="h-[400px] sm:h-[550px] hidden sm:block">
                    </div>
                    <div class="flex flex-col  gap-y-10 ">
                        <div class="bg-purple-100 dark:bg-gray-800 rounded-3xl">
                            <div class="sm:gap-y-2 flex flex-col pl-5 pt-5">
                                <h1 class="text-black1 font-bold text-3xl sm:text-4xl leading-tight dark:text-white ">
                                    {{ $agenda->title }}
                                </h1>
                                <div class="text-base leading-loose text-black3 dark:text-purple-200 pb-4">
                                    {{ $agenda->deskripsi }}
                                </div>
                            </div>

                            <div class="flex flex-col gap-y-10 pl-5 pr-5 sm:pb-5">

                                <div
                                    class=" flex flex-row bg-white dark:bg-gray-700 rounded-2xl p-5 items-center gap-x-4">
                                    <img src="{{ asset('assets/images/illustration/kalenderagenda.webp') }}"
                                        alt="" class="h-[100px] sm:hidden block">
                                    <div class="flex flex-col ">
                                        <h3 class="text-xl sm:text-2xl font-bold text-black1 dark:text-purple-100">
                                            Waktu
                                        </h3>
                                        <div
                                            class="text-sm sm:text-base leading-relaxed text-black4 dark:text-purple-200">
                                            {{ $agenda->start . ' - ' . $agenda->end }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-4 items-center pl-5 ">
                            <a href="{{ route('user.agenda') }}"
                                class="hover:bg-indigo-900 text-sm sm:text-base bg-purple-400  text-white py-4 px-5 sm:py-4 sm:px-10 rounded-full font-semibold">
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
                            They built amazing website to help more people around the world <br>by using our
                            recommendation
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
                            Suarakan Keluh Kesah Pesan dan Kesan mu <br>untuk membangun Lingkungan RW 2 Menjadi Lebih
                            Baik
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

                                        <span
                                            class="text-sm font-normal text-start text-gray-500 dark:text-gray-400">pesan
                                            :
                                        </span>
                                        <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                                            {{ $item->isi }}
                                        </p>
                                        <div
                                            class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 bg-purple-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                            @if ($item->status == 'pending')
                                                <span
                                                    class="text-sm font-normal text-gray-500 dark:text-gray-300">belum
                                                    di
                                                    respon</span>
                                            @else
                                                <span
                                                    class="text-sm font-normal text-gray-500 dark:text-gray-300">Respon
                                                    :
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

            <section class="closing font-sans mx-auto max-w-6xl bg-ungu p-14 rounded-3xl ">
                <div class="grid grid-cols-2 gap-x-10">
                    <div class="flex flex-col gap-y-10">

                        <div class="gap-y-2 flex flex-col">
                            <h1 class="text-white font-bold text-3xl leading-tight">Kirimkan Aspirasimu!
                            </h1>
                            <div class="text-base leading-loose text-white">
                                memberikan wadah bagi warga untuk berpartisipasi aktif dalam peningkatan kualitas
                                layanan
                                publik
                                dan mendukung transparansi serta akuntabilitas.
                            </div>
                        </div>
                    </div>
                    <div class="grid ">
                        <div class="">
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
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 5,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</x-layout.user-layout>
