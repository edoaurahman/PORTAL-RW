<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <section class="text-gray-600 mt-12 max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold">Popular News</h2>
        <div class="container px-5 py-8 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($berita as $item)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <Link to="/"> <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="{{ $item->sampul }}" alt="blog" /></Link>
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $item->kategori[0]->nama_kategori }}
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                    {{ $item->judul }}
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    {{ $item->generateCuplikan() }}
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('user.berita.detail', $item->slug) }}"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                            strokeWidth="2" fill="none" strokeLinecap="round" strokeLinejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" strokeWidth="2" fill="none"
                                            strokeLinecap="round" strokeLinejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        {{ $item->view }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- * Repeat the structure for other blog entries * --}}
            </div>
        </div>
    </section>
</div>
