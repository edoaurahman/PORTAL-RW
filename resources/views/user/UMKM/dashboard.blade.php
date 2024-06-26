<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans py-20">
        <div class="px-4 py-6  ">
            <div class="gap-y-2 flex flex-col sm:flex-row">
                <div class="flex-1 space-y-2">
                    <div class="w-fit gap-x-2  small-badge flex flex-row  rounded-full items-center">
                        <i class="fa-regular fa-newspaper"></i>
                        <p class="text-sm sm:text-base font-normal text-black dark:text-white">
                            Dashboard UMKM
                        </p>
                    </div>
                    <h2 class="font-bold text-black sm:text-6xl dark:text-white">Daftarkan UMKM Anda </h2>
                </div>
                <div class=" flex-1 text-base leading-loose text-black3">
                    <p class="text-sm text-black3 dark:text-white text-justify">
                        UMKM ini bertujuan untuk membantu UMKM dalam mengakses informasi, memonitor perkembangan
                        bisnis, dan mendapatkan dukungan yang dibutuhkan untuk pertumbuhan dan pengembangan usaha
                        mereka.
                    </p>
                    <div class="mt-7">
                        <a href="{{ route('user.umkm.tambah') }}"
                            class="hover:bg-indigo-900 text-sm bg-ungu text-white py-3 px-7  font-semibold">Tambah
                            UMKM</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- List Berita --}}
    <section class="sm:max-w-6xl mx-auto font-sans">
        <div class="mt-8">
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
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 gap-y-13 mt-8 sm:px-0 px-10">
            @foreach ($umkm as $item)
                <div class="group relative">
                    <div class=" absolute  bg-ungu px-2 py-1 rounded-tl-lg">
                        @if ($item->status == 'pending')
                            <span
                                class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                                    class="flex w-2.5 h-2.5 mr-3 bg-yellow-300 rounded-full me-1.5 flex-shrink-0"></span>Pending</span>
                        @elseif ($item->status == 'reject')
                            <span
                                class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                                    class="flex w-2.5 h-2.5 mr-3 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Di
                                Tolak</span>
                        @elseif ($item->tokoBuka())
                            <span
                                class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                                    class="flex w-2.5 h-2.5 mr-3 bg-green-400 rounded-full me-1.5 flex-shrink-0"></span>Buka</span>
                        @else
                            <span
                                class="flex flex-none items-center text-sm font-medium text-white dark:text-white "><span
                                    class="flex w-2.5 h-2.5 mr-3 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Tutup</span>
                        @endif
                    </div>
                    <div class="w-full h-full m-auto rounded-2xl shadow-md dark:border">
                        <div class="items-center">
                            <img class="w-auto mx-auto rounded-t-lg h-[206px] object-cover"
                                src="{{ $item->getCover() }}" alt="">
                        </div>
                        <div class="item-info p-5">
                            <div class="item-rating flex justify-between items-center mt-3">
                                <p class="text-xl font-medium dark:text-gray-400">{{ $item->textcut() }}</p>
                            </div>
                            <p class="item-desc text-gray-600 text-xs dark:text-gray-400">
                                {{ $item->generateCuplikan() }}</p>

                            <div class="flex gap-3 mt-3 items-center">
                                <a href="{{ route('user.umkm.detail', $item->id_umkm) }}"
                                    class="hover:text-indigo-400 text-ungu dark:text-violet-600 text-sm font-medium ">
                                    Lihat
                                </a>
                                <a href="{{ route('user.umkm.edit', $item->id_umkm) }}"
                                    class="hover:text-indigo-400 text-ungu text-sm font-medium dark:text-violet-600">
                                    Edit
                                </a>
                                <form action="{{ route('user.umkm.delete', $item->id_umkm) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Apakah kamu ingin menghapus umkm ini?')"
                                        class=" hover:text-indigo-400 text-red-600 text-sm font-medium "
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
