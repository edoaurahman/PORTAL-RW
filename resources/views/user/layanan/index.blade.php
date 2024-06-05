<x-layout.user-layout>

    <section class="hero max-w-6xl mx-auto font-sans pb-[200px] pt-[200px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">

                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-ungu dark:text-orange-100 font-bold text-[70px] leading-none">Pak RW
                    </h1>
                    <h1 class="text-black1 dark:text-purple-500 font-bold text-[70px] leading-none">
                        Siap Melayani!
                    </h1>
                    <!-- <div class="text-base leading-loose text-black3 dark:text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla porro necessitatibus excepturi repellendus est mollitia iusto ea, tenetur, reprehenderit expedita enim! Beatae, veniam. Doloribus officiis totam culpa. Quibusdam, delectus hic!
                    </div> -->

                </div>
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/illustration/avatarpakrw.webp') }}" alt="" class=" max-w-100">
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto font-sans  ">
        <div class=" w-full bg-white  border-gray-200 rounded-lg shadow dark:bg-gray-800 ">
            <div class="p-5">
                <h5 class="mb-2 text-[20px] font-bold tracking-tight text-gray-900 dark:text-white">Informasi Layanan
                </h5>
                <p> Temukan beragam layanan yang kami tawarkan untuk membantu Anda. Dari pelayanan pengurusan data penduduk hingga berbagai kebutuhan perizinan, kami hadir untuk membantu dan mempermudah akses layanan bagi masyarakat. <br><br></p>
                <div class="flex flex-row gap-x-4 items-end">
                    <a href="#tutorial"
                        class="hover:bg-indigo-900 dark:hover:bg-purple-700 text-base bg-ungu dark:bg-purple-800 border dark:border-purple-700  text-white py-4 px-10 rounded-lg font-semibold">Cara
                        Menggunakan layanan</a>
                </div>
            </div>
    </section>

    <section class="row max-w-6xl mx-auto font-sans py-12">
        <div>
            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-gray-900 dark:text-white">Daftar Layanan</h5>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach ($layanan as $item)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-70 bg-purple-400 object-cover" src="{{ $item->getImage() }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $item->nama_surat }}</h5>
                        </a>
                        <p class="mb-3  font-normal text-gray-700 dark:text-gray-400">{{ $item->keterangan }}</p>
                        <a href="{{ $item->downloadSurat() }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center border text-ungu bg-white border-ungu rounded-lg hover:bg-ungu  hover:text-white focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-800 dark:text-white dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                            Gunakan Layanan
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section id="tutorial"
        class=" max-w-6xl pt-20 mx-auto font-sans pb-12 mb-60 bg-ungu dark:bg-purple-900 p-14 rounded-3xl z-20 relative ">
        <div class=" items-center justify-between">
            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-white dark:text-white">Cara Menggunakan
                Layanan
                Pak RW</h5>
            <h1 class="leading-loose text-white dark:text-white">
                1. Jika Layanan tersebut berupa surat, maka tahap pertama adalah mendowload surat tersebut. <br>
                2. Surat yang membutuhkan tanda tangan RT/RW, sudah terlegalisir. <br>
                3. Setelah di download, isi data-data yang diperlukan, baik diedit atau secara manual. <br>
                4. setelah berbentuk hard file, antar kepada RW untuk diproses lebih lanjut.
            </h1>
        </div>
    </section>
</x-layout.user-layout>
