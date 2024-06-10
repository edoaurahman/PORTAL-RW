<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>PENDUDUK</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Penduduk
                    <small class="text-dark">
                        <i class="fas fa-xs fa-angle-right text-muted"></i>
                    </small>
                    Kartu Keluarga
                    <small class="text-dark">
                        <i class="fas fa-xs fa-angle-right text-muted"></i>
                    </small>
                    Detail Kartu Keluarga
                </small>
            </h3>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk->penduduk as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nik }}
                            </td>
                            <td class="px-6 py-4">
                                <button class="font-medium text-white bg-green-400 p-2  rounded">
                                    <a href="{{ route('admin.penduduk.detail', $item->nik) }}">
                                        Detail
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-10 text-xl flex justify-between items-center">
            <h1><strong>FOTO RUMAH</strong></h1>
            <div class="order-2 mb-5 flex justify-end">
                <button data-modal-target="add-foto-rumah" data-modal-toggle="add-foto-rumah"
                    class="text-white bg-blue-700 hover:bg-blue-800 dark:bg-purple-700 dark:hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800"
                    type="button">
                    Tambah Foto Rumah
                </button>
            </div>
        </div>
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
        @if ($penduduk->foto_rumah->isEmpty())
            <div class="mt-5 text-center">
                <h1 class="text-2xl">Foto rumah tidak ditemukan</h1>
            </div>
        @endif
        <div class="grid grid-cols-3 gap-4">
            @foreach ($penduduk->foto_rumah as $item)
                <div class="relative bg-white p-5 rounded-xl">
                    <img src="{{ $item->image() }}" alt="" class="w-full h-80 object-cover modal-image">
                    <div class="absolute bottom-0 left-0 right-0 p-5 bg-white dark:bg-gray-700 rounded-b-xl">
                        <form action="{{ route('admin.penduduk.kk.foto-rumah.delete', $item->id_foto_rumah) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini ?')"
                                class="font-medium text-white bg-red-400 p-2 rounded">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <x-partials.admin.penduduk.kk.Add-Foto-Rumah :no-kk="$penduduk->no_kk" />
    <x-partials.admin.modal.image />
</x-layout.admin-layout>
