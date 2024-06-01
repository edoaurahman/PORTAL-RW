<x-layout.user-layout>

    <section class="{{ $berita == null ? 'hidden' : '' }} mt-10 max-w-6xl mx-auto">
        <div class="block md:flex md:space-x-2 px-2 lg:p-0">

            <a class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block h-[24em] overflow-hidden"
                href="{{ route('user.berita.detail', $berita_populer[0]->slug) }}">
                <div class="absolute left-0 bottom-0 w-full h-full z-10"
                    style="background-image: linear-gradient(180deg, transparent, rgba(0,0,0,.7));"></div>
                <img src="{{ $berita_populer[0]->sampul }}"
                    class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" alt="First Example" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span
                        class="px-4 py-1 bg-ungu text-gray-200 inline-flex items-center justify-center mb-2">{{ $berita_populer[0]->kategori[0]->nama_kategori }}</span>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        {{ $berita_populer[0]->judul }}
                    </h2>
                    <div class="flex mt-3">
                        <i class="fa fa-user h-5 my-auto mx-3 text-white" aria-hidden="true"></i>
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> {{ $berita_populer[0]->penulis->nama }} </p>
                            <p class="font-semibold text-gray-400 text-xs">
                                {{ \Carbon\Carbon::parse($berita_populer[0]->tanggal_posting)->format('M Y') }} </p>
                        </div>
                    </div>
                </div>
            </a>

            <a class="{{ $berita_populer[1] == null ? 'hidden' : '' }} w-full md:w-1/3 relative rounded" style=height:
                24em; href="{{ route('user.berita.detail', $berita_populer[1]->slug) }}">
                <div class="absolute left-0 top-0 w-full h-full z-10"
                    style="background-image:linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="{{ $berita_populer[1]->sampul }}"
                    class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" alt="Second Example" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span
                        class="px-4 py-1 bg-ungu text-gray-200 inline-flex items-center justify-center mb-2">{{ $berita_populer[1]->kategori[0]->nama_kategori }}</span>
                    <h2 class="text-3xl font-semibold text-gray-100 leading-tight">{{ $berita_populer[1]->judul }}</h2>
                    <div class="flex mt-3">
                        <i class="fa fa-user h-5 my-auto mx-3 text-white" aria-hidden="true"></i>
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> {{ $berita_populer[1]->penulis->nama }}
                            </p>
                            <p class="font-semibold text-gray-400 text-xs">
                                {{ \Carbon\Carbon::parse($berita_populer[1]->tanggal_posting)->format('M Y') }} </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
            {{-- * post cards * --}}
            <div class="w-full lg:w-2/3">
                @foreach ($berita as $item)
                    <a class="block rounded-xl w-full lg:flex mb-10"
                        href="{{ route('user.berita.detail', $item->slug) }}">
                        <div class=" lg:w-48 flex-none bg-cover bg-center text-center overflow-hidden opacity-75"
                            style="background-image: url('{{ $item->sampul }}')"></div>
                        <div class="bg-white dark:bg-gray-700 rounded px-4 flex flex-col justify-between leading-normal w-full p-5">
                            <div>
                                <div class="mt-3 md:mt-0 ">
                                    <p class="text-black2 dark:text-gray-100 font-bold text-1xl mb-2">{{ $item->judul }}</p>
                                </div>
                                <p class="text-black3 dark:text-gray-300 text-base">{{ $item->generateCuplikan() }}</p>
                            </div>
                            <div class="flex mt-3">
                                <i class="fa fa-user h-5 my-auto mx-3" aria-hidden="true"></i>
                                <div>
                                    <p class="font-semibold text-black3 dark:text-gray-200 text-sm capitalize">
                                        {{ $item->penulis->nama }}
                                    </p>
                                    <p class="text-gray-400 text-xs">
                                        {{ \Carbon\Carbon::parse($item->tanggal_posting)->format('M Y') }}</p>

                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div>
                    {{ $berita->links() }}
                </div>
            </div>

            {{-- * right sidebar * --}}
            <div class="w-full lg:w-1/3 px-3">
                {{-- * topics * --}}
                <div class="mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 dark:text-gray-100 px-1 mb-2"> Popular Topics </h5>
                    <ul>
                        @php
                            $colors = ['bg-red-300', 'bg-green-300', 'bg-blue-300', 'bg-yellow-300', 'bg-purple-300'];
                        @endphp
                        @foreach ($kategori_populer as $key => $item)
                            <li
                                class="{{ $item->berita_count == 0 ? 'hidden' : '' }} px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="?kategori={{ $item->nama_kategori }}"
                                    class="flex items-center text-gray-600 dark:text-gray-200 cursor-pointer">
                                    <span class="inline-block h-4 w-4 {{ $colors[$key] }} mr-3"></span>
                                    {{ $item->nama_kategori }}
                                    <span class="text-gray-500 ml-auto">{{ $item->berita_count }}</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>

                {{-- * divider * --}}
                <div class="border border-dotted"></div>

                {{-- * subscribe * --}}
                <div class="p-1 mt-4 mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 dark:text-gray-100 mb-2"> Pentingnya Berita RW 02 </h5>
                    <p class="text-gray-600 dark:text-gray-300">
                        Berita memiliki peran yang sangat penting di RW 02 Arjosari karena menjadi sumber informasi
                        utama bagi warga untuk mengetahui berbagai peristiwa, kegiatan, dan kebijakan yang terjadi di
                        lingkungan mereka. Dengan adanya berita, warga dapat tetap terinformasi tentang hal-hal penting
                        seperti keamanan, lingkungan, dan acara sosial di sekitar mereka, yang pada gilirannya
                        memungkinkan mereka untuk berpartisipasi aktif dalam kehidupan komunitas dan membuat keputusan
                        yang lebih baik untuk kesejahteraan bersama.
                    </p>
                </div>

                {{-- * divider * --}}
                <div class="border border-dotted"></div>

            </div>

        </div>
    </section>

    <div class="mt-90"></div>
</x-layout.user-layout>
