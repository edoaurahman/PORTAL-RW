<x-layout.user-layout>
    <div class="dark:bg-[#1f1345]">
        <section class="hero max-w-6xl mx-auto font-sans pb-[200px] pt-[130px] sm:px-0 px-10">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col gap-y-10">
                    <div class="gap-y-2 flex flex-col">
                        <h1 class="text-ungu dark:text-orange-100 font-bold text-[40px] sm:text-[60px]  leading-none">Aduan Aspirasi dan Masukan
                        </h1>
                        <h1 class="text-black1 dark:text-purple-500 font-bold text-[40px] sm:text-[40px]  leading-none">
                            Untuk membangun kesejahteraaan lingkungan
                        </h1>
                    </div>
                </div>
                <div class="flex-row item-center hidden sm:block">
                    <img src="{{ asset('assets/images/illustration/aspirasi.webp') }}" alt="" class=" max-w-100">
                </div>
            </div>
        </section>
        
        <section class="aspirasi mx-auto font-sans pt-12 pb-5 sm:py-12">
            <div class="flex flex-col gap-y-8">
                <div class="gap-y-2 flex flex-col text-center">
                    <div class="grid grid-cols-1 mx-auto sm:grid-cols-2 md:grid-cols-4 gap-8 gap-y-13">
                        @foreach ($aspirasi as $item)
                            <div class="flex flex-row gap-2.5">
                                <div
                                    class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 bg-purple-300 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Author :
                                        </span>
                                        <span
                                            class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->author }}</span>
                                    </div>

                                    <span
                                        class="text-sm font-normal text-start text-gray-500 dark:text-gray-400">Pesan
                                        :
                                    </span>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                                        {{ $item->isi }}
                                    </p>
                                    <div
                                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 bg-purple-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                        @if ($item->status == 'pending')
                                            <span
                                                class="text-sm font-normal text-gray-500 dark:text-gray-300">Belum
                                                di respon</span>
                                        @else
                                            <span
                                                class="text-sm font-normal text-gray-500 dark:text-gray-300">Respon
                                                :
                                            </span>
                                            <span
                                                class="text-sm font-normal text-gray-500 dark:text-gray-300">{{ $item->respon }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        
    </div>
</x-layout.user-layout>
