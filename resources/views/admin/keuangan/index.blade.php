<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>KEUANGAN</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Keuangan
                </small>
            </h3>
        </div>
        <!-- End Header Content -->

        @if (session('success'))
            <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg onclick="this.parentElement.parentElement.style.display='none'"
                        class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a.5.5 0 0 1 0 .707l-8.485 8.485a.5.5 0 0 1-.707-.707l8.485-8.485a.5.5 0 0 1 .707 0zm-8.485 8.485a.5.5 0 0 1-.707 0l-8.485-8.485a.5.5 0 0 1 .707-.707l8.485 8.485a.5.5 0 0 1 0 .707z" />
                    </svg>
                </span>
            </div>
        @endif
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm bg-red-600 text-white rounded-lg" role="alert">
                <span class="font-bold">Data gagal disimpan</span>
            </div>
            @foreach ($errors->all() as $error)
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <span class="font-medium">{!! $error !!}</span>
                </div>
            @endforeach
        @endif
        <!-- Start Body Content -->
        <div class="flex flex-nowrap relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Iuran
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keuangan as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $item->kk->kepalaKeluarga->nama }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $item->no_kk }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->kk->kepalaKeluarga->alamat->jalan . ' RT' . $item->kk->kepalaKeluarga->alamat->rt . ' RW' . $item->kk->kepalaKeluarga->alamat->rw . ' Kelurahan ' . $item->kk->kepalaKeluarga->alamat->kel . ' Kecamatan ' . $item->kk->kepalaKeluarga->alamat->kecamatan }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.keuangan.detail', $item->no_kk) }}">
                                    <button class="font-medium text-white bg-green-400 p-2  rounded">
                                        Detail
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6 grow" x-data="{ isRt: {{ auth()->user()->level->nama_level == 'RT' ? false : true }} }">
            <div class="space-y-4 rounded-lg border border-gray-100 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                <dl class="flex items-center justify-between gap-4 border-gray-200 pt-2 dark:border-gray-700">
                    <dt class="text-base text-gray-900 dark:text-white">Total Pemasukkan</dt>
                    <dd class="text-base text-gray-900 dark:text-white">{{ $totalPemasukkan }}</dd>
                </dl>
                <dl x-show="isRt"
                    class="flex items-center justify-between gap-4 border-gray-200 pt-2 dark:border-gray-700">
                    <dt class="text-base text-gray-900 dark:text-white">Total Pengeluaran</dt>
                    <dd class="text-base text-gray-900 dark:text-white">{{ $totalPengeluaran }}</dd>
                </dl>
                <dl x-show="isRt"
                    class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                    <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                    <dd class="text-base font-bold text-gray-900 dark:text-white">{{ $total }}</dd>
                </dl>
            </div>
        </div>

        <div class="mt-5">
            {{ $keuangan->links() }}
        </div>
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>
