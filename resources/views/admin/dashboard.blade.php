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
        <!-- ====== Chart One Start -->
        <div
            class="col-span-12 rounded-sm border border-gray-200 bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-gray-700 dark:bg-gray-800 sm:px-7.5 xl:col-span-8">
            <div class="flex flex-wrap items-start justify-between gap-4 sm:!flex-nowrap">
                <div>
                    <h4 class="mb-6 px-7.5 text-xl font-bold text-gray-900 dark:text-white text-center">
                        Pemetaan Penduduk
                    </h4>
                </div>
                <div class="flex w-full flex-wrap gap-3 sm:gap-5">
                    <div class="flex min-w-47.5">
                        <span
                            class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-blue-500">
                            <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-blue-500"></span>
                        </span>
                        <div class="w-full">
                            <p class="font-semibold text-blue-500">Total Penduduk</p>
                        </div>
                    </div>
                    <div class="flex min-w-47.5">
                        <span
                            class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-primary">
                            <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-primary"></span>
                        </span>
                        <div class="w-full">
                            <p class="font-semibold text-primary">Laki-laki</p>
                        </div>
                    </div>
                    <div class="flex min-w-47.5">
                        <span
                            class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-pink-500">
                            <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-pink-500"></span>
                        </span>
                        <div class="w-full">
                            <p class="font-semibold text-pink-500">Perempuan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <!-- ====== Chart One End -->

        <!-- ====== Chart Two Start -->
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
                            <h5 class="font-medium text-black dark:text-white">
                                Pembersihan lingkungan bersama
                            </h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">
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
                            <h5 class="font-medium">Rapat koordinasi RW</h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">
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
                            <h5 class="font-medium">Posyandu Balita</h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">
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
                            <h5 class="font-medium">Arisan RW</h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">
                                    Ayo kumpul dan bersenang-senang di acara arisan RW!
                                </span>
                                <span class="text-xs"> . Sabtu, 06 April 2024, 15:00 WIB</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        {{-- <div
            class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
            <div class="mb-4 justify-between gap-4 sm:flex">
                <div>
                    <h4 class="text-xl font-bold text-black dark:text-white">
                        Agenda
                    </h4>
                </div>
                <div>
                    <div class="relative z-20 inline-block">
                        <select name="#" id="#"
                            class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none">
                            <option value="">This Week</option>
                            <option value="">Last Week</option>
                        </select>
                        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                                    fill="#637381" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                                    fill="#637381" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <div>
                <div id="chartTwo" class="-mb-9 -ml-5"></div>
            </div>
        </div> --}}

        <!-- ====== Chart Two End -->

        <!-- ====== Chart Three Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5">
            <div class="mb-3 justify-between gap-4 sm:flex">
                <div>
                    <h4 class="text-xl font-bold text-black dark:text-white text-center">
                        Kalender RW 02
                    </h4>
                </div>
                {{-- <div>
                    <div class="relative z-20 inline-block">
                        <select name="" id=""
                            class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none">
                            <option value="">Monthly</option>
                            <option value="">Yearly</option>
                        </select>
                        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                                    fill="#637381" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                                    fill="#637381" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div id="chartThree" class="mx-auto flex justify-center"></div>
            </div>
            <div class="-mx-8 flex flex-wrap items-center justify-center gap-y-3">
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-primary"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> Desktop </span>
                            <span> 65% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#6577F3]"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> Tablet </span>
                            <span> 34% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#8FD0EF]"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> Mobile </span>
                            <span> 45% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#0FADCF]"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> Unknown </span>
                            <span> 12% </span>
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- ====== Chart Three End -->

        <!-- ====== Map One Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-7">
            <h4 class="mb-2 text-xl font-bold text-black dark:text-white text-center">
                UMKM
            </h4>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm1.jpeg') }}"
                        alt="UMKM 1">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Warung Madura Cak Abid</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm3.jpeg') }}"
                        alt="UMKM 2">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Maklor Anang</h5>
                    </div>
                </div>
                <div class="rounded-sm border border-gray-300 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <img class="w-full object-cover rounded-t-sm" src="{{ asset('assets/images/umkm/umkm2.jpeg') }}"
                        alt="UMKM 3">
                    <div class="p-4">
                        <h5 class="text-lg font-medium mb-1">Rawon Mak Cik Edo</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- ====== Map One End -->

        <!-- ====== Table One Start -->
        {{-- <div class="col-span-12 xl:col-span-8">
            <div
                class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
                    Top Channels
                </h4>

                <div class="flex flex-col">
                    <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:!grid-cols-5">
                        <div class="p-2.5 xl:!p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Source</h5>
                        </div>
                        <div class="p-2.5 text-center xl:!p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Visitors</h5>
                        </div>
                        <div class="p-2.5 text-center xl:!p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Revenues</h5>
                        </div>
                        <div class="hidden p-2.5 text-center sm:block xl:!p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Sales</h5>
                        </div>
                        <div class="hidden p-2.5 text-center sm:block xl:!p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Conversion</h5>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:!grid-cols-5">
                        <div class="flex items-center gap-3 p-2.5 xl:!p-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/brand/brand-01.svg')}}" alt="Brand">
                            </div>
                            <p class="hidden font-medium text-black dark:text-white sm:block">
                                Google
                            </p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-black dark:text-white">3.5K</p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-meta-3">$5,768</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-black dark:text-white">590</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-meta-5">4.8%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:!grid-cols-5">
                        <div class="flex items-center gap-3 p-2.5 xl:!p-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/brand/brand-02.svg')}}" alt="Brand">
                            </div>
                            <p class="hidden font-medium text-black dark:text-white sm:block">
                                Twitter
                            </p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-black dark:text-white">2.2K</p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-meta-3">$4,635</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-black dark:text-white">467</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-meta-5">4.3%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:!grid-cols-5">
                        <div class="flex items-center gap-3 p-2.5 xl:!p-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/brand/brand-03.svg')}}" alt="Brand">
                            </div>
                            <p class="hidden font-medium text-black dark:text-white sm:block">
                                Github
                            </p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-black dark:text-white">2.1K</p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-meta-3">$4,290</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-black dark:text-white">420</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:!p-5">
                            <p class="font-medium text-meta-5">3.7%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:!grid-cols-5">
                        <div class="flex items-center gap-3 p-2.5 xl:!p-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/brand/brand-04.svg')}}" alt="Brand">
                            </div>
                            <p class="hidden font-medium text-black dark:text-white sm:block">
                                Vimeo
                            </p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:!p-5">
                            <p class="font-medium text-black dark:text-white">1.5K</p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:p-5">
                            <p class="font-medium text-meta-3">$3,580</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                            <p class="font-medium text-black dark:text-white">389</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                            <p class="font-medium text-meta-5">2.5%</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 sm:!grid-cols-5">
                        <div class="flex items-center gap-3 p-2.5 xl:p-5">
                            <div class="flex-shrink-0">
                                <img src="{{asset('assets/images/brand/brand-05.svg')}}" alt="Brand">
                            </div>
                            <p class="hidden font-medium text-black dark:text-white sm:block">
                                Facebook
                            </p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:p-5">
                            <p class="font-medium text-black dark:text-white">1.2K</p>
                        </div>

                        <div class="flex items-center justify-center p-2.5 xl:p-5">
                            <p class="font-medium text-meta-3">$2,740</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                            <p class="font-medium text-black dark:text-white">230</p>
                        </div>

                        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                            <p class="font-medium text-meta-5">1.9%</p>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <!-- ====== Table One End -->

        <!-- ====== Chat Card Start -->
        {{-- <div
            class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
            <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                Chats
            </h4>

            <div>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium text-black dark:text-white">
                                Devid Heilo
                            </h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">Hello,
                                    how
                                    are you?</span>
                                <span class="text-xs"> . 12 min</span>
                            </p>
                        </div>
                        <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                            <span class="text-sm font-medium text-white">3</span>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium">Henry Fisher</h5>
                            <p>
                                <span class="text-sm font-medium">I am waiting for you</span>
                                <span class="text-xs"> . 5:54 PM</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium">Wilium Smith</h5>
                            <p>
                                <span class="text-sm font-medium">Where are you now?</span>
                                <span class="text-xs"> . 10:12 PM</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium text-black dark:text-white">
                                Henry Deco
                            </h5>
                            <p>
                                <span class="text-sm font-medium text-black dark:text-white">Thank
                                    you
                                    so much!</span>
                                <span class="text-xs"> . Sun</span>
                            </p>
                        </div>
                        <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                            <span class="text-sm font-medium text-white">2</span>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium">Jubin Jack</h5>
                            <p>
                                <span class="text-sm font-medium">I really love that!</span>
                                <span class="text-xs"> . Oct 23</span>
                            </p>
                        </div>
                    </div>
                </a>
                <a href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                    <div class="relative h-14 w-14 rounded-full">
                        <img src="{{ asset('assets/images/user/user-04.png') }}" alt="User" />
                        <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                        <div>
                            <h5 class="font-medium">Wilium Smith</h5>
                            <p>
                                <span class="text-sm font-medium">Where are you now?</span>
                                <span class="text-xs"> . Sep 20</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
        <!-- ====== Chat Card End -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: true
            }
        });
    </script>
</x-layout.admin-layout>
