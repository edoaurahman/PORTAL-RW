<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2">
                <h1><strong>KELOLA LEVEL</strong></h1>
            </div>
            <h3 class="text-muted"> 
                ADMIN            
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i> 
                    Kelola Level
                </small>
            </h3>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-ungu dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
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
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout.admin-layout>