<x-layout.admin-layout>
    <div class="relative">

        <!-- Start Header Content -->
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>DATA RT</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Data RT
                </small>
            </h3>
        </div>
        <!-- End Header Content -->

        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
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
                    @foreach ($DataRT as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->penduduk->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->penduduk->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->penduduk->alamatLengkap() }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->level->nama_level }}
                                {{ $item->level->nama_level === 'RT' ? $item->penduduk->alamat->rt : null }}
                            </td>
                            <td class="px-6 py-4">
                                <button onclick="showEdit({{ $item }})"
                                    class="font-medium text-white bg-yellow-300 p-2 dark:text-white rounded">
                                    <a data-modal-target="edit-data-rt" data-modal-toggle="edit-data-rt"
                                        class="font-medium text-white bg-yellow-300 p-2 dark:text-white rounded">
                                        Edit
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Body Content -->
    </div>
    <x-partials.admin.data-r-t.edit />
</x-layout.admin-layout>
