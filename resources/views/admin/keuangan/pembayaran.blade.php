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
        <form action="{{ route('admin.notification.iuran-reminder') }}" method="post">
            @csrf
            <button type="submit" class="mb-2 font-medium text-white bg-blue-700 p-2 rounded">
                Kirim Notifikasi
            </button>
        </form>
        <!-- End Header Content -->
        @if ($cekKeuangan == 0)
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="font-medium">Belum ada pembayaran</span>
            </div>
        @endif
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
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Tagihan
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
                    @foreach ($penduduk as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $item->nama }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $item->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $tagihan[$item->kk->no_kk] ?? 'Belum Ada Tagihan' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->alamat->jalan . ' RT' . $item->alamat->rt . ' RW' . $item->alamat->rw . ' Kelurahan ' . $item->alamat->kel . ' Kecamatan ' . $item->alamat->kecamatan }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.keuangan.detail', $item->no_kk) }}">
                                    <button class="font-medium text-white bg-green-400 p-2  rounded">
                                        Detail
                                    </button>
                                </a>
                                <button onclick="showFormPembayaran({{ $item->no_kk }})"
                                    data-modal-target="pembayaran-penduduk" data-modal-toggle="pembayaran-penduduk"
                                    class="font-medium text-white bg-blue-400 p-2  rounded">
                                    Bayar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            {{ $penduduk->links() }}
        </div>
        <!-- End Body Content -->
    </div>
    <x-partials.admin.keuangan.add-pembayaran />
</x-layout.admin-layout>
