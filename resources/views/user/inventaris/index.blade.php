<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">

                <div class="gap-y-2 flex flex-col">
                    <h1 class="text-ungu dark:text-orange-100 font-bold text-[70px] leading-none">Butuh sesuatu?
                    </h1>
                    <h1 class="text-black1 dark:text-purple-500 font-bold text-[70px] leading-none">
                        Pinjam Saja Ke Pak RW!
                    </h1>
                </div>
            </div>
            <div class="flex flex-row item-center">
                <img src="{{ asset('assets/images/illustration/nyilih.png') }}" alt="" class=" max-w-100">
            </div>
        </div>
    </section>

    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="min-h-screen">
            <main class="p-8">
                <div class="space-y-8">
                    @foreach ($inventaris as $item)

                    <div class="bg-purple-100 dark:bg-zinc-800 p-6 rounded-lg shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="{{ $item->getImage() }}" alt="Terop" class="w-64 h-34 rounded-lg">
                            <div>
                                <h3 class="text-2xl font-bold text-zinc-900 dark:text-white">{{ $item->nama }}</h3>
                                <div class="flex space-x-4 mt-2">
                                    <div class="text-center">
                                        <span class="block text-zinc-500 dark:text-zinc-400">{{ $item->jumlah }}</span>
                                        <span class="block text-xl font-bold text-zinc-900 dark:text-white">1</span>
                                    </div>
                                </div>
                            </div>
                            <button data-modal-target="pinjam-inventaris" data-modal-toggle="pinjam-inventaris" onclick="showpinjam({{$item}})" class="ml-auto bg-purple-600 text-white px-4 py-2 rounded-lg">Pinjam</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </main>
        </div>
    </section>
    <section id="tutorial" class=" max-w-6xl pt-20 mx-auto font-sans pb-12 mb-60 bg-ungu p-14 rounded-3xl z-20 relative ">
        <div class=" items-center justify-between">
            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-white dark:text-white">Mekanisme Peminjaman</h5>
            <h1 class="leading-loose text-white dark:text-white">
                1. Jika Layanan tersebut berupa surat, maka tahap pertama adalah mendowload surat tersebut. <br>
                2. Surat yang membutuhkan tanda tangan RT/RW, sudah terlegalisir. <br>
                3. Setelah di download, isi data-data yang diperlukan, baik diedit atau secara manual. <br>
                4. setelah berbentuk hard file, antar kepada RW untuk diproses lebih lanjut.
            </h1>   
        </div>
    </section>
    <x-partials.user.inventaris.pinjam/>
</x-layout.user-layout>