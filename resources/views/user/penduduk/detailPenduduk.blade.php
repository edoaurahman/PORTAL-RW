<x-layout.user-layout>
    <section class="DataDiri max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-1 gap-y-10
            ">
                <div class="gap-y-2 flex flex-col">
                    <div class="title">
                        <h3 class="flex items-center text-5xl font-extrabold dark:text-white">Data diri penduduk<span
                                class="bg-ungu text-white text-[25px] font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-800 ms-2">{{ $penduduk->status_penduduk }}</span>
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
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Alamat</dt>
                                    <dd class="text-lg font-semibold">
                                        {{ $penduduk->alamat->jalan . ' RT' . $penduduk->alamat->rt . ' RW' . $penduduk->alamat->rw . ', ' . $penduduk->alamat->kel . ' ' . $penduduk->alamat->kecamatan }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div class="flex flex-1">
                            <dl
                                class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">

                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor handphone</dt>
                                    <dd class="text-lg font-semibold">{{ $penduduk->no_hp }}</dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ $penduduk->foto_profile() }}" alt="" class="h-[200px]">
            </div>
        </div>
    </section>

    <section class="berita mx-auto font-sans py-12">
        <div class="flex flex-col gap-y-8">
            <div class="gap-y-2 flex flex-col text-center">
                <h1 class="text-black1 dark:text-whiten font-bold text-5xl leading-tight">Berita
                </h1>
                <div class="text-base leading-loose text-black3 dark:text-white items-center">
                    tempat dimana sang penduduk menuliskan berita, maka akan tampil berita apa saja yang telah dibuat
                </div>

                <div class="mx-auto max-w-6xl font-sans pb-12">
                    @if ($berita == null || $berita->isEmpty())
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <div>
                                {{ $penduduk->nama }} belum memiliki berita.
                            </div>
                        </div>
                    @endif
                    @foreach ($berita as $item)
                        <div id="alert-additional-content-3 "
                            class="p-4 mb-4 w-[70vw] mx-auto text-purple-800 border border-purple-300 rounded-lg bg-purple-50 dark:bg-gray-800 dark:text-purple-200 dark:border-purple-800"
                            role="alert">
                            <div class="flex items-center">

                                <h3 class="text-lg font-medium">{{ $item->judul }}</h3>
                            </div>
                            <div class="flex">
                                <a href="{{ route('user.berita.detail', $item->slug) }}">
                                    <button type="button"
                                        class="text-white gap-1 bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        Baca
                                    </button>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <section class="umkm mx-auto font-sans py-12">
        <div class="flex flex-col gap-y-8">
            <div class="gap-y-2 flex flex-col text-center">
                <h1 class="text-black1 dark:text-whiten font-bold text-5xl leading-tight">Showcase UMKM
                </h1>
                <div class="text-base leading-loose text-black3 dark:text-white items-center">
                    Di sini, Anda dapat melihat detail tentang bisnis, termasuk informasi kontak, <br> deskripsi
                    usaha,
                    dan data penting lainnya yang membantu memperkuat identitas dan visi bisnis.
                </div>
            </div>

            {{-- List Berita --}}
            <div class="historyberita max-w-6xl mx-auto font-sans pb-12">

                <section class="max-w-6xl mx-auto font-sans">
                    <div class="display mt-8">
                        @if ($umkm == null || $umkm->isEmpty())
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div>
                                    Anda belum memiliki umkm.
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- End List Berita --}}
                    <div class="display-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 gap-y-13 mt-8">
                        @foreach ($umkm as $item)
                            <a href="{{ route('user.umkm.detail', $item->id_umkm) }}">
                                <div class="group relative">
                                    <div
                                        class="{{ $item->tokoBuka() ? 'hidden' : '' }} absolute bg-slate-950 rounded-2xl w-full h-full opacity-30">
                                    </div>
                                    <div class="items w-full h-full m-auto rounded-2xl shadow-md  ">
                                        <div class="item-img pb-5">
                                            <img class="w-auto rounded-t-lg" src="{{ $item->getCover() }}"
                                                alt="">
                                        </div>
                                        <div class="item-info p-5">
                                            <div class="item-rating flex justify-between items-center mt-3">
                                                <p class="text-xl font-medium">{{ $item->nama_umkm }}</p>
                                                {{-- <img class="w-18" src="assets/images/umkm/rating_starts.png" alt=""> --}}
                                            </div>
                                            <p class="item-desc text-gray-600 text-xs">{{ $item->generateCuplikan() }}
                                            </p>

                                            <div
                                                class="item price group-hover:text-purple-500 text-ungu text-sm font-medium my-3">
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
                </section>
            </div>
        </div>
    </section>
    {{-- End List Berita --}}
    <div class="mt-90"></div>
</x-layout.user-layout>
