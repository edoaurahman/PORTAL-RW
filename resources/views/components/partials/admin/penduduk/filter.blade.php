<form class="w-full col-span-3 !col-start-1">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Filter</label>
        <button id="dropdown-filter" data-dropdown-toggle="filter"
            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
            type="button">Filter <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg></button>
        <div id="filter"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-filter">
                <li>
                    <button id="rt" data-dropdown-toggle="rt-filter" data-dropdown-placement="right-start"
                        type="button"
                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RT<svg
                            class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg></button>
                    <div id="rt-filter"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="rt">
                            @foreach ($listRT as $item)
                                <li>
                                    <div class="flex items-center mx-2 my-1">
                                        <input id="rt-checkbox-{{ $item->rt }}" type="checkbox" name="rt[]"
                                            value="{{ $item->rt }}"
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg></button>
                    <div id="jenis-kelamin-filter"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="jenis-kelamin">
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg></button>
                    <div id="status-penduduk-filter"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="status-penduduk">
                            <li>
                                <div class="flex items-center mx-2 my-1">
                                    <input id="status-penduduk-checkbox-1" type="checkbox" name="status_penduduk[]"
                                        value="Pendatang"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="status-penduduk-checkbox-1"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pendatang</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center mx-2 my-1">
                                    <input id="status-penduduk-checkbox-2" type="checkbox" name="status_penduduk[]"
                                        value="Penduduk Tetap"
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
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>
