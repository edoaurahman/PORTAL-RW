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
            <button data-modal-target="" data-modal-toggle=""
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Tambah Surat
            </button>
        </div>
        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama Surat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            File
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
                    {{-- @foreach ($users as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-violet-300 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->penduduk->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->penduduk->nik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->level->nama_level }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="font-medium text-white bg-ungu p-2 dark:text-white rounded">
                                <a href="#">
                                    Edit
                                </a>
                            </button>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>