<x-layout.admin-layout>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-4">
        <!-- Card Item Start -->
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                <svg class="fill-primary dark:fill-white" width="22" height="25" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512">
                    <path
                        d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z" />
                </svg>
            </div>

            <div class="mt-4 flex items-end justify-between">
                <div>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                        {{ $jumlahRT }}
                    </h4>
                    <span class="text-sm font-medium">Jumlah RT</span>
                </div>

            </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                <svg class="fill-primary dark:fill-white" width="22" height="25"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 512">
                    <path
                        d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z" />
                </svg>

            </div>

            <div class="mt-4 flex items-end justify-between">
                <div>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                        {{ $jumlahPenduduk }}
                    </h4>
                    <span class="text-sm font-medium">Jumlah Penduduk</span>
                </div>
            </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                <svg class="fill-primary dark:fill-white" width="25" height="22"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                </svg>
            </div>

            <div class="mt-4 flex items-end justify-between">
                <div>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                        {{ $jumlahAgenda }}
                    </h4>
                    <span class="text-sm font-medium">Jumlah Agenda</span>
                </div>
            </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                <svg class="fill-primary dark:fill-white" width="22" height="22"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z" />
                </svg>
            </div>

            <div class="mt-4 flex items-end justify-between">
                <div>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                        {{ $jumlahUMKM}}
                    </h4>
                    <span class="text-sm font-medium">Jumlah UMKM</span>
                </div>
            </div>
        </div>
        <!-- Card Item End -->
    </div>

    <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
        <!-- ====== Pemetaan Penduduk Start -->
        <div
            class="col-span-12 rounded-sm border border-gray-200 bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-gray-700 dark:bg-gray-800 sm:px-7.5 xl:col-span-8">
            <div class="flex flex-wrap items-start justify-center gap-4 sm:!flex-nowrap">
                <div>
                    <h4 class="mb-6 px-7.5 text-xl font-bold text-gray-900 dark:text-white">
                        Pemetaan Penduduk
                    </h4>
                </div>
            </div>
            <div class="w-full">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <!-- ====== Pemetaan Penduduk End -->

        <!-- ====== Usia Penduduk Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-4">
            <div class="mb-3 gap-4 justify-center">
                <h4 class="text-xl font-bold text-black dark:text-white text-center">
                    Pemetaan Usia
                </h4>
                <!-- Elemen kanvas untuk chart -->
                <canvas id="usiaPendudukChart"></canvas>
            </div>
        </div>

        <!-- ====== Usia Penduduk End -->

        <!-- ====== Agenda Start -->
        <div
            class="overflow-hidden col-span-12 rounded-sm border border-gray-200 bg-white py-6 shadow-default dark:border-gray-700 dark:bg-gray-800 xl:col-span-6 xl:h-[650px]">
            <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white text-center">
                Agenda RW
            </h4>
            <div class="overflow-auto h-full p-5">
                <div x-show="$store.agenda.data.length === 0">
                    <div class="flex items center justify-center h-full">
                        <span class="text-gray-400 dark:text-gray-500">Tidak ada Agenda</span>
                    </div>
                </div>
                <div x-show="$store.agenda.isLoading"
                    class="flex items-center justify-center w-full h-56 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <div role="status">
                        <svg aria-hidden="true"
                            class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <template x-for="item in $store.agenda.data">
                    <a href="#"
                        class="flex items-center gap-5 px-7.5 py-3 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-3 dark:hover:bg-meta-4">
                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-bold text-black dark:text-white" x-text="item.title">
                                    Title
                                </h5>
                                <p>
                                    <span class="text-sm font-normal text-black dark:text-white"
                                        x-text="item.deskripsi">
                                        Deskripsi
                                    </span>
                                    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                                    <span class="text-xs">
                                        Mulai: <span x-text="item.start">
                                        </span>
                                        <br>
                                        Selesai: <span x-text="item.end"></span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </template>
            </div>

        </div>
        <!-- ====== Agenda End -->

        <!-- ====== Kalender Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-6 xl:min-h-[650px]">
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
            <section class="mb-3 gap-4" id="kalender">
                <h4 class="text-xl font-bold text-black dark:text-white text-center">
                    Kalender RW 02
                </h4>
                <div id="calendar"></div>
                <button data-modal-target="add-agenda" data-modal-toggle="add-agenda"
                    class="mt-5 block text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-gray-800 dark:focus:ring-blue-800"
                    type="button">
                    Tambah Agenda
                </button>
            </section>
        </div>

        <!-- ====== Kalender End -->

        <!-- ====== UMKM Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-12">
            <h4 class="mb-2 text-xl font-bold text-black dark:text-white text-center">
                UMKM
            </h4>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="">
                        <img class="w-full h-50 object-cover rounded-t-sm"
                            src="{{ asset('assets/images/umkm/food_19.png') }}" alt="UMKM 1">
                    </div>
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Abid's Bakery</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full h-50 object-cover rounded-t-sm"
                        src="{{ asset('assets/images/umkm/food_26.png') }}" alt="UMKM 2">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Makaroni 25 Anang</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full h-50 object-cover rounded-t-sm"
                        src="{{ asset('assets/images/umkm/food_12.png') }}" alt="UMKM 3">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Ice Cream Mak Cik Edo</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full h-50 object-cover rounded-t-sm"
                        src="{{ asset('assets/images/umkm/food_2.png') }}" alt="UMKM 3">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Salad Pak De Putra</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== UMKM End -->
        <x-partials.admin.agenda.add-agenda />
        <x-partials.admin.agenda.edit-agenda />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Menunggu dokumen selesai dimuat
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk membuat chart
            function createChart() {
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Penduduk Total', 'Penduduk Tetap', 'Pendatang'],
                        datasets: [{
                            label: 'Total Penduduk',
                            data: [100, 60, 40],
                            backgroundColor: '#270551',
                            borderWidth: 1
                        }, {
                            label: 'Laki-laki',
                            data: [55, 35, 20],
                            backgroundColor: '#640EF1',
                            borderWidth: 1
                        }, {
                            label: 'Perempuan',
                            data: [45, 25, 20],
                            backgroundColor: '#B186F8',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        animation: {
                            duration: 2000 // Durasi animasi dalam milidetik (contoh: 2000ms = 2 detik)
                        },
                        scales: {
                            x: {
                                labels: ['Total', 'Tetap', 'Pendatang']
                            },
                            y: {
                                beginAtZero: true
                            }
                        },
                        maintainAspectRatio: true,
                        legend: {
                            labels: {
                                fontColor: '#000000',
                                fontSize: 16
                            }
                        }
                    }
                });
            }

            // Panggil fungsi pembuatan chart
            createChart();
        });
    </script>


    <script src="{{ asset('assets/js/calender.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let calendarEl = document.getElementById('calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'Asia/Jakarta',
                locale: 'id',
                events: @json($agenda),
                editable: true,
                headerToolbar: {
                    start: 'prevYear,prev',
                    center: 'title',
                    end: 'next,nextYear'
                },
                customButtons: {
                    addEvent: {
                        text: 'Tambah Agenda',
                        click: function() {
                            document.getElementById('add-agenda').classList.add('block');
                        }
                    },
                    next: {
                        click: function() {
                            calendar.next();
                            const date = calendar.getDate();
                            Alpine.store('agenda').getByDate(date.toISOString());
                        }
                    },
                    prev: {
                        click: function() {
                            calendar.prev();
                            const date = calendar.getDate();
                            Alpine.store('agenda').getByDate(date.toISOString());
                        }
                    }
                },
                eventClick: function(info) {
                    info.jsEvent.preventDefault(); // don't let the browser navigate
                    Alpine.store('agenda').id = info.event.id;
                    Alpine.store('agenda').title = info.event.title;
                    Alpine.store('agenda').deskripsi = info.event.extendedProps.deskripsi;
                    Alpine.store('agenda').start = info.event.startStr;
                    Alpine.store('agenda').end = info.event.endStr;

                    // call alpine toggle agenda modal
                    Alpine.store('agenda').toggle();
                },
                eventDrop: function(info) {
                    if (!confirm("Apakah Anda yakin ingin memindahkan agenda ini?")) {
                        info.revert();
                        return;
                    }
                    const data = {
                        id: info.event.id,
                        start: info.event.startStr,
                        end: info.event.endStr
                    };
                    fetch('/api/agenda/update', {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data)
                    }).then(response => response.json()).then(data => {
                        // console.log(data);
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                },
            });
            calendar.render();
        });
    </script>

    <script>
        // Menunggu dokumen selesai dimuat
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk membuat chart
            function createChartUsia() {
                const ctxUsia = document.getElementById('usiaPendudukChart').getContext('2d');
                const usiaPendudukChart = new Chart(ctxUsia, {
                    type: 'doughnut',
                    data: {
                        labels: ['0-5 tahun', '5-12 tahun', '13-19 tahun', '20-60 tahun', '60+ tahun'],
                        datasets: [{
                            label: 'Pemetaan Usia Penduduk',
                            data: [10, 15, 30, 35,
                                10
                            ], // Data contoh, silakan sesuaikan dengan data sebenarnya
                            backgroundColor: [
                                '#e0cffc',
                                '#cbaffa',
                                '#985ef6',
                                '#530cc9',
                                '#270551'
                            ],
                            borderColor: [
                                'black',
                                'black',
                                'black',
                                'black',
                                'black'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        animation: {
                            duration: 2000 // Durasi animasi dalam milidetik (contoh: 2000ms = 2 detik)
                        },
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.label || '';

                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed !== null) {
                                            label += context.parsed + '%';
                                        }
                                        return label;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // Panggil fungsi pembuatan chart
            createChartUsia();
        });
    </script>
</x-layout.admin-layout>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('agenda', {
            id: '',
            title: '',
            deskripsi: '',
            start: '',
            end: '',
            on: false,
            isLoading: true,
            data: [],
            init() {
                this.getData();
            },
            toggle() {
                this.on = !this.on;
            },
            getData() {
                fetch('/api/agenda', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.data = data;
                        this.isLoading = false;
                    })
            },
            getByDate(date) {
                this.isLoading = true;
                fetch('/api/agenda', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            date: date
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.data = data;
                        this.isLoading = false;
                    })
            },
        })
    })
</script>
