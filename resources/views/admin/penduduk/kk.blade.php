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
                </small>
            </h3>

            @if (session('success'))
                <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Berhasil!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg onclick="this.parentElement.parentElement.style.display='none'"
                            class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
        </div>
        <form class="w-[30vw] py-2">
            <div class="flex">
                <label for="search-dropdown"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Filter</label>
                <button id="dropdown-filter" data-dropdown-toggle="filter"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">Filter <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="filter"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-filter">
                        <li>
                            <button id="rt" data-dropdown-toggle="rt-filter"
                                data-dropdown-placement="right-start" type="button"
                                class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RT<svg
                                    class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg></button>
                            <div id="rt-filter"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="rt">
                                    @foreach ($listRT as $item)
                                        <li>
                                            <div class="flex items-center mx-2 my-1">
                                                <input id="rt-checkbox-{{ $item->rt }}" type="checkbox"
                                                    name="rt[]" value="{{ $item->rt }}"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="rt-checkbox-{{ $item->rt }}"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->rt }}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="jenis-kelamin" data-dropdown-toggle="jenis-kelamin-filter"
                                data-dropdown-placement="right-start" type="button"
                                class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jenis
                                Kelamin<svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg></button>
                            <div id="jenis-kelamin-filter"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="jenis-kelamin">
                                    <li>
                                        <div class="flex items-center mx-2 my-1">
                                            <input id="jenis-kelamin-checkbox-1" type="checkbox" name="jenis_kelamin[]"
                                                value="Laki-Laki"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="jenis-kelamin-checkbox-1"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center mx-2 my-1">
                                            <input id="jenis-kelamin-checkbox-2" type="checkbox" name="jenis_kelamin[]"
                                                value="Perempuan"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="jenis-kelamin-checkbox-2"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="status-penduduk" data-dropdown-toggle="status-penduduk-filter"
                                data-dropdown-placement="right-start" type="button"
                                class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Status
                                Penduduk<svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg></button>
                            <div id="status-penduduk-filter"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="status-penduduk">
                                    <li>
                                        <div class="flex items-center mx-2 my-1">
                                            <input id="status-penduduk-checkbox-1" type="checkbox"
                                                name="status_penduduk[]" value="Pendatang"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="status-penduduk-checkbox-1"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pendatang</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center mx-2 my-1">
                                            <input id="status-penduduk-checkbox-2" type="checkbox"
                                                name="status_penduduk[]" value="Penduduk Tetap"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="status-penduduk-checkbox-2"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Penduduk
                                                Tetap</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Cari warga" name="s" />
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-purple-700 rounded-e-lg border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Kepala Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->pendudukHasOne->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nik_kepalakeluarga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->no_kk }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.penduduk.kk.detail', $item->no_kk) }}">
                                    <button class="font-medium text-white bg-green-400 p-2 rounded">
                                        Details
                                    </button>
                                </a>
                                <a href="#">
                                    <button x-data @click="$store.penduduk.showEdit({{ $item }})"
                                        data-modal-target="edit-kk" data-modal-toggle="edit-kk"
                                        class="font-medium text-white bg-yellow-300 p-2  rounded">
                                        Edit
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            {{ $penduduk->links() }}
        </div>
    </div>

    <x-partials.admin.penduduk.kk.edit />
</x-layout.admin-layout>
