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
    {{-- End List Berita --}}

    <div class="mt-90"></div>
</x-layout.user-layout>
