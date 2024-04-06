<x-layout.admin-layout>
    <div class="relative">
        <h1>Kartu Keluarga</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Kepala Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->pendudukHasOne->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nik_kepalakeluarga }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.penduduk.kk.detail', $item->no_kk) }}"
                                    class="font-medium text-white hover:underline bg-blue-600 p-2 rounded">Details</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout.admin-layout>
