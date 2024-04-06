<x-layout.admin-layout>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-4">
        <!-- Card Item Start -->
        <div
            class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                {{-- <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                        fill="" />
                    <path
                        d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                        fill="" />
                </svg> --}}
                <svg class="fill-primary dark:fill-white" width="22" height="25" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512">
                    <path
                        d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z" />
                </svg>
            </div>

            <div class="mt-4 flex items-end justify-between">
                <div>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                        7
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
                        1000
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
                        5
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
                        54
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
            <div class="flex flex-wrap items-start justify-between gap-4 sm:!flex-nowrap">
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

        <!-- ====== Agenda Start -->
        <div
            class="col-span-12 rounded-sm border border-gray-200 bg-white py-6 shadow-default dark:border-gray-700 dark:bg-gray-800 xl:col-span-4">
            <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white text-center">
                Agenda RW
            </h4>

            <div>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-bold text-black dark:text-white">
                                Pembersihan lingkungan bersama
                            </h5>
                            <p>
                                <span class="text-sm font-normal text-black dark:text-white">
                                    Ayo gotong royong menjaga kebersihan lingkungan RW kita!
                                </span>
                                <span class="text-xs"> . Minggu, 14 April 2024</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-bold">Rapat koordinasi RW</h5>
                            <p>
                                <span class="text-sm font-normal text-black dark:text-white">
                                    Pembahasan keamanan dan kebersihan lingkungan RW.
                                </span>
                                <span class="text-xs"> . Rabu, 10 April 2024, 19:00 WIB</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-bold">Posyandu Balita</h5>
                            <p>
                                <span class="text-sm font-normal text-black dark:text-white">
                                    Pemeriksaan dan imunisasi gratis untuk balita di RW kita.
                                </span>
                                <span class="text-xs"> . Selasa, 09 April 2024, 08:00 WIB</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-bold">Arisan RW</h5>
                            <p>
                                <span class="text-sm font-normal text-black dark:text-white">
                                    Ayo kumpul dan bersenang-senang di acara arisan RW!
                                </span>
                                <span class="text-xs"> . Sabtu, 06 April 2024, 15:00 WIB</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- ====== Agenda End -->


        <!-- ====== Kalender Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5">
            <div class="mb-3 justify-between gap-4 sm:flex">
                <div>
                    <h4 class="text-xl font-bold text-black dark:text-white text-center">
                        Kalender RW 02
                    </h4>
                </div>
            </div>
        </div>

        <!-- ====== Kalender End -->

        <!-- ====== UMKM Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-7">
            <h4 class="mb-2 text-xl font-bold text-black dark:text-white text-center">
                UMKM
            </h4>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="">
                        <img class="w-full h-50 object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm1.jpeg') }}"
                        alt="UMKM 1">
                    </div>
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Warung Madura Cak Abid</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full h-50 object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm3.jpeg') }}"
                        alt="UMKM 2">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Maklor Anang</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full h-50 object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm2.jpeg') }}"
                        alt="UMKM 3">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Rawon Mak Cik Edo</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== UMKM End -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
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
    </script>
                
</x-layout.admin-layout>
