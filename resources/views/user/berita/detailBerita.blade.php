<x-layout.user-layout>

    <section class="mt-8 max-w-6xl mx-auto">
        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight"> {{ $berita->judul }}</h2>
                <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2"> Cryptocurrency
                </a>
            </div>

            <img src="https://images.unsplash.com/photo-1587614387466-0a72ca909e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                class="w-full object-cover lg:rounded h-[28em]" alt="Blog Cover" />
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="px-4 lg:px-0 mt-8 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                {{-- * ... Existing code ... * --}}
                <p>{{ $berita->isi }}</p>
                <div class="flex items-center justify-between mt-4 md:w-1/2">
                    <div class="flex items-center space-x-2">
                        <BiCommentDetail class="text-gray-600" />
                        <span class="text-gray-600">15 comments</span>
                    </div>
                    <div class="flex items-center space-x-2 mt-8">
                        <AiOutlineHeart class="text-red-500" />
                        <span class="text-gray-600">120 likes</span>
                    </div>
                    <a href="/" class="text-green-700 inline-flex items-center justify-center"> Back to Blogs
                        <AiOutlineArrowRight class="ml-2" />
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                        <div>
                            <p class="font-semibold text-gray-700 text-sm"> {{ $berita->autor->nama }}</p>
                            <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class="text-gray-700 py-3 text-xs">
                        Tanggal Publikasi: {{ $berita->tanggal_posting }}
                    </p>
                    <a href="{{ route('user.detail', $berita->autor) }}">
                        <button
                            class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                            Detail Autor
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


        <PopularBlog />
    </section>
    <x-view.popular-berita />

    <div class="mt-90"></div>
</x-layout.user-layout>
