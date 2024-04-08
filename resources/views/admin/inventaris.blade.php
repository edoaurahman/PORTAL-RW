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
        <!-- End Header Content -->

        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-ungu dark:bg-ungu dark:text-white">
                    <tr>
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