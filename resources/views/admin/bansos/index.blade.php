<x-layout.admin-layout>
    <div class="relative" x-data="bansos">

        <!-- Start Header Content -->
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>BANSOS</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Bansos
                </small>
            </h3>
        </div>
        <!-- End Header Content -->
        <div class="flex justify-between pb-5">
            <h1> </h1>
            <!-- Modal toggle -->
            <button data-modal-target="add-bansos" data-modal-toggle="add-bansos"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Tambah Penerima Bansos
            </button>
        </div>

        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 p-5 bg-white rounded my-5">
            <li class="me-2">
                <a href="#"
                    class="inline-block px-4 py-3 rounded-lg hover:text-white hover:bg-blue-600 dark:hover:bg-gray-800 dark:hover:text-white"
                    :class="{ 'text-white bg-blue-600': (method === 'SAW') }" @click="toggle('SAW')">Metode
                    SAW</a>
            </li>
            <li class="me-2">
                <a href="#"
                    class="inline-block px-4 py-3 rounded-lg hover:text-white hover:bg-blue-600 dark:hover:bg-gray-800 dark:hover:text-white"
                    :class="{ 'text-white bg-blue-600': (method === 'AHP') }" @click="toggle('AHP')">Metode AHP</a>
            </li>
        </ul>



        @if (session('success'))
            <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg onclick="this.parentElement.parentElement.style.display='none'"
                        class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
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

        <!-- SAW -->
        <div x-show="method == 'SAW'" class="flex flex-nowrap relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Rank
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gaji
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Jumlah Tanggungan
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Luas Tanah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kapasistas Listrik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saw as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $loop->iteration }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>{{ $item['no_kk'] }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $item['gaji'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['jumlah_tanggungan'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['luas_tanah'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['kapasitas_listrik'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['jumlah_kendaraan'] }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                {{ $item['nilai_total'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- SAW -->
        <!-- AHP -->
        <div x-show="method == 'AHP'" class="flex flex-nowrap relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Rank
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gaji
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Jumlah Tanggungan
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Luas Tanah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kapasistas Listrik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ahp as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $loop->iteration }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>{{ $item['no_kk'] }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $item['gaji'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['jumlah_tanggungan'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['luas_tanah'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['kapasitas_listrik'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['jumlah_kendaraan'] }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                {{ $item['nilai_total'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- AHP -->
    </div>
    <x-partials.admin.bansos.add-bansos />
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('bansos', () => ({
                method: 'SAW',
                toggle(e) {
                    this.method = e
                }
            }))
        })
    </script>
</x-layout.admin-layout>
