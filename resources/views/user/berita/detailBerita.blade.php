<x-layout.user-layout>

    <section class="mt-8 max-w-6xl mx-auto">
        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight"> {{ $berita->judul }}</h2>
                </a>
            </div>

            <img src="{{ $berita->sampul }}" class="w-full object-cover lg:rounded h-[28em]" alt="Blog Cover" />
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="px-4 lg:px-0 mt-8 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                <span class="text-gray-500">View:
                    {{ $berita->view }}</span>

                <p class="mt-2">{!! $berita->isi !!}</p>
            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <i class="fa fa-user h-5 my-auto mx-3" aria-hidden="true"></i>
                        <div>
                            <p class="font-semibold text-gray-700 text-sm"> {{ $berita->Penulis->nama }}</p>
                            <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class="text-gray-700 py-3 text-xs">
                        Tanggal Publikasi: {{ $berita->tanggal_posting }}
                    </p>
                    <a href="{{ route('user.detail', $berita->Penulis) }}">
                        <button
                            class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                            Detail Penulis
                            <div class="ml-2"></div>
                        </button>
                    </a>
                </div>
                <div class="iklan mt-8">
                    <img src="https://source.unsplash.com/300x200/?advertising,social&fm=jpg&q=60"
                        alt="Iklan Masyarakat" width="300" height="200">
                    <img class="mt-4" src="https://source.unsplash.com/300x400/?iklan,social,portrait&fm=jpg&q=60"
                        alt="Iklan Masyarakatt" width="300" height="400">
                </div>
            </div>
        </div>
    </section>
    <x-view.Popular-Berita />
    <div class="mt-90"></div>
</x-layout.user-layout>
