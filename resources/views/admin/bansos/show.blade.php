<x-layout.admin-layout>
    <div class="relative">

        <!-- Start Header Content -->
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>BANSOS</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Bansos
                </small>
            </h3>
        </div>
        <!-- End Header Content -->
        <div class="grid grid-cols-3 gap-4">
            <dl
                class="col-span-1 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700 bg-white rounded-xl p-5">
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kepala Keluarga</dt>
                    <dd class="text-lg font-semibold">{{ $bansos->kk->kepalaKeluarga->nama }}</dd>
                </div>
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">No KK</dt>
                    <dd class="text-lg font-semibold">{{ $bansos->no_kk }}</dd>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Gaji</dt>
                    <dd class="text-lg font-semibold">{{ $gaji[$bansos->gaji] }}</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jumlah Tanggungan</dt>
                    <dd class="text-lg font-semibold">{{ $jumlah_tanggungan[$bansos->jumlah_tanggungan] }}</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Luas Tanah</dt>
                    <dd class="text-lg font-semibold">{{ $luas_tanah[$bansos->luas_tanah] }}</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kapasistas Listrik</dt>
                    <dd class="text-lg font-semibold">{{ $kapasitas_listrik[$bansos->kapasitas_listrik] }}</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jumlah Kendaraan</dt>
                    <dd class="text-lg font-semibold">{{ $jumlah_kendaraan[$bansos->jumlah_kendaraan] }}</dd>
                </div>
            </dl>

            <div class="relative overflow-x-auto col-span-2 rounded-xl">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nik
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bansos->kk->penduduk as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->nik }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->jenis_kelamin }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.penduduk.detail', $item->nik) }}">
                                        <button class="font-medium text-white bg-green-400 p-2 rounded">
                                            Detail
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



        <div class="pt-10 grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($bansos->foto_bansos as $item)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ $item->fotoRumah }}" alt="">
                </div>
            @endforeach
        </div>

    </div>
</x-layout.admin-layout>
