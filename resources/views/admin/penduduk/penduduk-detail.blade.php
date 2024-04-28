<x-layout.admin-layout>
    <div class="relative">
        <h1>Detail Penduduk</h1>
        <div class="mt-5 relative overflow-x-auto sm:rounded-lg">
            <table class="text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <tbody>
                    @foreach ($detail_penduduk as $key => $value)
                        <tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $value }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.penduduk.kk.detail', $detail_penduduk['No KK']) }}">
            <button
                class="mt-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Detail Kartu Keluarga
            </button>
        </a>
    </div>
</x-layout.admin-layout>
