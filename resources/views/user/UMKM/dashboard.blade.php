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
                            <a href="{{ route('user.umkm.tambah') }}"
                                class="hover:bg-indigo-900 text-sm bg-ungu text-white py-3 px-7  font-semibold">Tambah
                                UMKM</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- List Berita --}}
    <div class="historyberita max-w-6xl mx-auto font-sans pb-12">

    </div>
    <section class="max-w-6xl mx-auto font-sans">
        <div class="display mt-8">
            @if ($umkm == null || $umkm->isEmpty())
                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
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
                <div class="group relative">
                    <div class=" absolute  bg-ungu px-2 py-1 rounded-tl-lg">
                        {{-- <span class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                            class="flex w-2.5 h-2.5 mr-3 bg-green-400 rounded-full me-1.5 flex-shrink-0"></span>Buka</span> --}}
                        {{-- <span class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                            class="flex w-2.5 h-2.5 mr-3 bg-yellow-300 rounded-full me-1.5 flex-shrink-0"></span>Pending</span> --}}
                        <span class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                                class="flex w-2.5 h-2.5 mr-3 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Tutup</span>
                    </div>
                    <div class="items w-full h-full m-auto rounded-2xl shadow-md">
                        <div class="item-img ">
                            <img class="w-auto rounded-t-lg h-[206px] object-cover" src="{{ $item->getCover() }}"
                                alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium">{{ $item->textcut() }}</p>
                                {{-- <img class="w-18" src="assets/images/umkm/rating_starts.png" alt=""> --}}
                            </div>
                            <p class="item-desc text-gray-600 text-xs">{{ $item->generateCuplikan() }}</p>

                            <div class="flex flex-row gap-x-3 mt-3">
                                <a href="{{ route('user.umkm.detail', $item->id_umkm) }}"
                                    class="item price hover:text-indigo-400 text-ungu text-sm font-medium ">
                                    Detail
                                </a>
                                <a href="{{ route('user.umkm.edit', $item->id_umkm) }}"
                                    class="item price hover:text-indigo-400 text-ungu text-sm font-medium ">
                                    Update
                                </a>
                                <form action="{{ route('user.umkm.delete', $item->id_umkm) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="item price hover:text-indigo-400 text-ungu text-sm font-medium "
                                        onclick="return confirm('Apakah kamu ingin menghapus umkm ini?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- End List Berita --}}

    <div class="mt-150"></div>
</x-layout.user-layout>
