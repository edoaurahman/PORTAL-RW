<x-layout.user-layout>
    <section class="hero max-w-6xl mx-auto font-sans pb-12 pt-[100px] ">
        <div class="flex flex-row items-center justify-between gap-x-20">
            <div class="flex-1 flex-col gap-y-10 space-y-5">

                <div class="gap-y-2 flex flex-col space-y-2">
                    <h1 class="text-black1 font-bold text-[70px] leading-none dark:text-white">Data Seluruh<br>
                        Penduduk RT {{ $user->penduduk->alamat->rt }}.
                    </h1>
                    <div class="text-base leading-loose text-black3 dark:text-gray-400">
                        Data seluruh penduduk RT {{ $user->penduduk->alamat->rt }} adalah fondasi penting dalam
                        perencanaan dan
                        pembangunan wilayah.
                        Informasi ini, termasuk jumlah dan profil penduduk, menjadi dasar bagi pemerintah lokal untuk
                        merancang kebijakan yang lebih efektif dan responsif terhadap kebutuhan masyarakat.
                    </div>
                </div>
            </div>

            <div class="flex flex-row item-center">
                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                    <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                    <path
                                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                    <path
                                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">
                                    {{ $totalPenduduk }}</h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Total penduduk di RT
                                    {{ $user->penduduk->alamat->rt }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="grid grid-cols-2">
                        <dl class="flex items-center">
                            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Laki-laki:</dt>
                            <dd class="text-gray-900 text-sm dark:text-white font-semibold">{{ $totalPendudukLakiLaki }}
                            </dd>
                        </dl>
                        <dl class="flex items-center justify-end">
                            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Perempuan:</dt>
                            <dd class="text-gray-900 text-sm dark:text-white font-semibold">
                                {{ $totalPendudukPerempuan }}</dd>
                        </dl>
                    </div>

                    <div id="column-chart"></div>

                </div>

            </div>
        </div>
    </section>



    <section class="tablePenduduk max-w-6xl mx-auto font-sans py-12 relative overflow-x-auto  sm:rounded-lg">
        <form action="" method="get">
            <div
                class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-10">
                <div>
                    <button id="filterButton" data-dropdown-toggle="filter"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Action button</span>
                        Filter
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="filter"
                        class="absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-2 font-medium text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>Status Penduduk</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <div class="flex items-center my-2">
                                        <input id="default-checkbox" type="checkbox" value="Pendatang"
                                            name="status_penduduk[]"
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pendatang</label>
                                    </div>
                                    <div class="flex items-center my-2">
                                        <input id="default-checkbox" type="checkbox" value="Penduduk Tetap"
                                            name="status_penduduk[]"
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Penduduk
                                            Tetap</label>
                                    </div>
                                </div>
                            </div>

                            <h2 id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-2 font-medium text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>Jenis Kelamin</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <div class="flex items-center my-2">
                                        <input id="default-checkbox" type="checkbox" value="Laki-Laki"
                                            name="jenis_kelamin[]"
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                                    </div>
                                    <div class="flex items-center my-2">
                                        <input id="default-checkbox" type="checkbox" value="Perempuan"
                                            name="jenis_kelamin[]"
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" name="s" autocomplete="off"
                        value="{{ old('s') }}"
                        class="block p-2 ps-10 text-sm text-gray-900 border
                        border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-purple-500 focus:border-purple-500
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                        dark:focus:ring-purple-500 dark:focus:border-purple-500"
                        placeholder="Cari penduduk">
                </div>
            </div>
        </form>
        <table class="shadow-md w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-purple-50 dark:bg-purple-900 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">

                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No.Hp
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
                        <td class="w-4 p-4">

                        </td>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img width="45px" src="{{ $item->foto_profile() }}" alt="User"
                                class="rounded-full object-cover" />
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $item->nama }}</div>
                                <div class="font-normal text-gray-500">{{ $item->status_penduduk }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->alamatLengkap() }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->jenis_kelamin }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->no_hp }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.detail', $item->nik) }}"
                                class="font-medium text-purple-600 dark:text-purple-500 hover:underline">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full text-center text-gray-500 {{ !$penduduk->isEmpty() ? 'hidden' : '' }}">
            <h1 class="p-5">Tidak ada data</h1>
        </div>
        <div class="mt-5">
            {{ $penduduk->links() }}
        </div>

    </section>


    <div class="mt-90"></div>
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <script>
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                    name: "Total",
                    color: "#270551",
                    data: [{
                            x: "Total",
                            y: {{ $totalPenduduk }}
                        },
                        {
                            x: "Pendatang",
                            y: {{ $totalPendudukPendatang }}
                        },
                        {
                            x: "Tetap",
                            y: {{ $totalPendudukTetap }}
                        },
                    ],
                },
                {
                    name: "Laki-Laki",
                    color: "#7733FF",
                    data: [{
                            x: "Total",
                            y: {{ $totalPendudukLakiLaki }}
                        },
                        {
                            x: "Pendatang",
                            y: {{ $totalPendudukLakiLakiPendatang }}
                        },
                        {
                            x: "Tetap",
                            y: {{ $totalPendudukLakiLakiTetap }}
                        },
                    ],
                },
                {
                    name: "Perempuan",
                    color: "#b286f8",
                    data: [{
                            x: "Total",
                            y: {{ $totalPendudukPerempuan }}
                        },
                        {
                            x: "Pendatang",
                            y: {{ $totalPendudukPerempuanPendatang }}
                        },
                        {
                            x: "Tetap",
                            y: {{ $totalPendudukPerempuanTetap }}
                        },
                    ],
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
            fill: {
                opacity: 1,
            },
        }

        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
    </script>
</x-layout.user-layout>
