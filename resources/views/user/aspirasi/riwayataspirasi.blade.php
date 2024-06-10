<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans py-20">
        <div class="px-10 py-6  dark:border-gray-600 dark:bg-gray-800">
            <div class="gap-y-2 flex flex-col sm:flex-row sm:justify-between ">
                <div class="flex-1 space-y-2">
                    <h2 class="font-bold text-black sm:text-6xl dark:text-white">Riwayat Unggahan Aspirasi</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- List Berita --}}
    <div class="historyberita max-w-6xl mx-auto font-sans pb-12 sm:px-0 px-10">
        @if ($aspirasi == null || $aspirasi->isEmpty())
            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div>
                    Anda belum memiliki aspirasi.
                </div>
            </div>
        @endif
        @foreach ($aspirasi as $item)
            <x-partials.user.aspirasi.status 
            status="{{ $item->status }}" isi="{{ $item->isi }}"
             respon="{{ $item->respon }}"/>
        @endforeach
    </div>
    {{-- End List Berita --}}
    <div class="mt-90"></div>
</x-layout.user-layout>
