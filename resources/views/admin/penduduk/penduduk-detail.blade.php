<x-layout.admin-layout>
    <div class="relative">
        <h1>Detail Penduduk</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
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
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-violet-300 even:dark:bg-gray-800 border-b dark:border-gray-700">
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