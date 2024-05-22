<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>LAYANAN</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Layanan
                </small>
            </h3>
        </div>
        <div class="flex justify-between pb-5">
            <h1> </h1>
            <!-- Modal toggle -->
            <button data-modal-target="tambah-surat" data-modal-toggle="tambah-surat" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Tambah Surat
            </button>
        </div>
        @if (session('success'))
        <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Berhasil!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg onclick="this.parentElement.parentElement.style.display='none'" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a.5.5 0 0 1 0 .707l-8.485 8.485a.5.5 0 0 1-.707-.707l8.485-8.485a.5.5 0 0 1 .707 0zm-8.485 8.485a.5.5 0 0 1-.707 0l-8.485-8.485a.5.5 0 0 1 .707-.707l8.485 8.485a.5.5 0 0 1 0 .707z" />
                </svg>
            </span>
        </div>
        @endif
        @if ($errors->any())
        <div class="p-4 mb-4 text-sm bg-red-600 text-white rounded-lg" role="alert">
            <span class="font-bold">Data gagal disimpan</span>
        </div>
        @foreach ($errors->all() as $error)
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">{!! $error !!}</span>
        </div>
        @endforeach
        @endif
        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            File
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($layanan as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama_surat }}
                        </th>
                        <td class="px-6 py-4">
                            <img class="max-h-20" src="{{ $item->getImage() }}">
                        </td>
                        <td class="px-6 py-4">
                            <a class="hover:underline hover:text-blue-500 " href="{{ $item->downloadSurat() }}">{{ $item->file }}</a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->keterangan }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->author }}
                        </td>
                        <td class="px-6 py-4">
                            <button onclick="showEdit({{ $item }})" data-modal-target="edit-surat" data-modal-toggle="edit-surat" class="font-medium text-white bg-ungu p-2 dark:text-white rounded">
                                
                                    Edit
                                
                            </button>
                            <form action="{{ route("admin.layanan.delete",$item->id_surat) }}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Apakah Anda akan menghapus barang ini? : {{ $item->nama_surat }}')" type="submit" class="font-medium text-white bg-red-500 p-2 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Body Content -->
    </div>

    <x-partials.admin.layanan.add />
    <x-partials.admin.layanan.edit />

</x-layout.admin-layout>