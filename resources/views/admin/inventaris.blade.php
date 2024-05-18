<x-layout.admin-layout>
    <div class="relative">

        <!-- Start Header Content -->
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>INVENTARIS</strong></h1>
            </div>
            <h3 class="text-muted"> 
                ADMIN            
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i> 
                    Inventaris
                </small>
            </h3>
        </div>
        <div class="flex justify-between pb-5">
            <h1> </h1>
            <!-- Modal toggle -->
            <button data-modal-target="" data-modal-toggle=""
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Tambah Barang
            </button>
        </div>
        <!-- End Header Content -->

        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventaris as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->id_inventaris }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->jumlah }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-white bg-yellow-300 p-2 dark:text-white rounded">
                                <a href="#">
                                    Edit
                                </a>
                            </button>

                            <form action="{{ route('admin.inventaris.delete', $item->id_inventaris) }}" method="post">
                                @csrf
                                @method('delete')
                                <button
                                    onclick="return confirm('Apakah Anda akan menghapus barang ini? : {{ $item->nama }}')"
                                    type="submit" class="font-medium text-white bg-red-500 p-2 rounded">
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
</x-layout.admin-layout>