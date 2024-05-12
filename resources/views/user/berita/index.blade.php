<x-layout.user-layout>

    <section class="mt-10 max-w-6xl mx-auto">
        <div class="block md:flex md:space-x-2 px-2 lg:p-0">
            <a class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block h-[24em] overflow-hidden" href="#">
                <div class="absolute left-0 bottom-0 w-full h-full z-10"
                    style="background-image: linear-gradient(180deg, transparent, rgba(0,0,0,.7));"></div>
                <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                    class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" alt="First Example" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span
                        class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Nutrition</span>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        Berita Makanan Hari Rabu
                    </h2>
                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                        </div>
                    </div>
                </div>
            </a>


            <a class="w-full md:w-1/3 relative rounded" style=height: 24em; href="#">
                <div class="absolute left-0 top-0 w-full h-full z-10"
                    style="background-image:linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="https://images.unsplash.com/photo-1543362906-acfc16c67564?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80"
                    class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" alt="Second Example" />
                <div class="p-4 absolute bottom-0 left-0 z-20">
                    <span
                        class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Science</span>
                    <h2 class="text-3xl font-semibold text-gray-100 leading-tight">Makanan kategori busuk di RW</h2>
                    <div class="flex mt-3">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                        <div>
                            <p class="font-semibold text-gray-200 text-sm"> Chrishell Staus </p>
                            <p class="font-semibold text-gray-400 text-xs"> 15 Aug </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
            {{-- * post cards * --}}
            <div class="w-full lg:w-2/3">
                @foreach ($berita as $item)
                    <a class="block rounded w-full lg:flex mb-10" href="{{ route('user.detailberita', $item->slug) }}">
                        <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                            style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                            title="deit is very important"></div>
                        <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal w-full p-5">
                            <div>
                                <div class="mt-3 md:mt-0 ">
                                    <p class="text-gray-700 font-bold text-2xl mb-2">{{ $item->judul }}</p>
                                </div>
                                <p class="text-gray-700 text-base">{{ $item->generateCuplikan() }}</p>
                            </div>
                            <div class="flex mt-3">
                                <img src="https://randomuser.me/api/portraits/men/86.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm capitalize">{{ $item->autor->nama }}
                                    </p>
                                    <p class="text-gray-600 text-xs">14 Aug</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


                {{-- <div class="rounded w-full lg:flex mb-10">
                    <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                        style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                        title="deit is very important">
                    </div>
                    <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                        <div>
                            <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                Integer commodo, sapien ut vulputate viverra
                            </div>
                            <p class="text-gray-700 text-base">
                                Nam malesuada aliquet metus, ac commodo augue mollis sit amet. Nam bibendum risus sit
                                amet
                                metus semper consectetur. Proin consequat ullamcorper eleifend. Nam bibendum risus sit
                                amet
                                metus semper consectetur.
                            </p>
                        </div>
                        <div class="flex mt-3">
                            <img src="https://randomuser.me/api/portraits/women/54.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                            <div>
                                <p class="font-semibold text-gray-700 text-sm capitalize"> Serenity Hughes </p>
                                <p class="text-gray-600 text-xs"> 14 Aug </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded w-full lg:flex mb-10">
                    <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                        style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')"
                        title="deit is very important">
                    </div>
                    <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                        <div>
                            <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                Suspendisse varius justo eu risus laoreet fermentum non aliquam dolor
                            </div>
                            <p class="text-gray-700 text-base">
                                Mauris porttitor, velit at tempus vulputate, odio turpis facilisis dui, vitae eleifend
                                odio
                                ipsum at odio. Phasellus luctus scelerisque felis eget suscipit.
                            </p>
                        </div>
                        <div class="flex mt-3">
                            <img src="https://randomuser.me/api/portraits/men/86.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                            <div>
                                <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                                <p class="text-gray-600 text-xs"> 14 Aug </p>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>

            {{-- * right sidebar * --}}
            <div class="w-full lg:w-1/3 px-3">
                {{-- * topics * --}}
                <div class="mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> Popular Topics </h5>
                    <ul>
                        <li
                            class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-green-300 mr-3"></span>
                                Nutrition
                                <span class="text-gray-500 ml-auto">23 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li
                            class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-indigo-300 mr-3"></span>
                                Food & Diet
                                <span class="text-gray-500 ml-auto">18 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li
                            class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-yellow-300 mr-3"></span>
                                Workouts
                                <span class="text-gray-500 ml-auto">34 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                        <li
                            class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                            <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                <span class="inline-block h-4 w-4 bg-blue-300 mr-3"></span>
                                Immunity
                                <span class="text-gray-500 ml-auto">9 articles</span>
                                <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- * divider * --}}
                <div class="border border-dotted"></div>

                {{-- * subscribe * --}}
                <div class="p-1 mt-4 mb-4">
                    <h5 class="font-bold text-lg uppercase text-gray-700 mb-2"> Pentingnya Berita RW 02 </h5>
                    <p class="text-gray-600">
                        Berita memiliki peran yang sangat penting di RW 02 Arjosari karena menjadi sumber informasi
                        utama bagi warga untuk mengetahui berbagai peristiwa, kegiatan, dan kebijakan yang terjadi di
                        lingkungan mereka. Dengan adanya berita, warga dapat tetap terinformasi tentang hal-hal penting
                        seperti keamanan, lingkungan, dan acara sosial di sekitar mereka, yang pada gilirannya
                        memungkinkan mereka untuk berpartisipasi aktif dalam kehidupan komunitas dan membuat keputusan
                        yang lebih baik untuk kesejahteraan bersama.
                    </p>
                    <input placeholder="Tampilkan Seluruh Berita RW 02"
                        class="text-gray-700 bg-gray-100 rounded-t hover:outline-none p-2 w-full mt-4 border" />
                    <button class="px-4 py-2 bg-indigo-600 text-gray-200 rounded-b w-full capitalize tracking-wide">
                        Selengkapnya
                    </button>
                </div>

                {{-- * divider * --}}
                <div class="border border-dotted"></div>

            </div>

        </div>
    </section>

    <div class="mt-90"></div>
</x-layout.user-layout>
