<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2">
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
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-ungu dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk->penduduk as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nik }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout.admin-layout>