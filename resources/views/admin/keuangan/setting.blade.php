<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>KEUANGAN</strong></h1>
            </div>
            <h3 class="text-muted">
                Admin
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Keuangan
                </small>
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Setting
                </small>
            </h3>
        </div>
        <!-- End Header Content -->

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
        <!-- Start Body Content -->
        <form action="{{ route('admin.keuangan.setting.update') }}" method="post" class="bg-white p-5 rounded">
            @csrf
            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimal
                    Pembayaran</label>
                <input value="{{ $setting->minimal_pembayaran }}" type="number" id="default-input"
                    name="minimal_pembayaran"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="interval" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Interval
                    Pembayaran</label>
                <select id="interval" name="interval"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option {{ $setting->interval == 1 ? 'selected' : '' }} value="1">Minggu</option>
                    <option {{ $setting->interval == 2 ? 'selected' : '' }} value="2">Bulan</option>
                    <option {{ $setting->interval == 3 ? 'selected' : '' }} value="3">Tahun</option>
                </select>
                <p class="mt-2 text-sm text-gray-500">Pilih Waktu Pembayaran</p>
            </div>
            <div class="mb-6">
                <label for="interval_waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                    Pembayaran</label>
                <select id="interval_waktu" name="interval_waktu"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option {{ $setting->interval_waktu == 1 ? 'selected' : '' }} value="1">1 minggu/bulan/tahun
                        sekali</option>
                    <option {{ $setting->interval_waktu == 2 ? 'selected' : '' }} value="2">2 minggu/bulan/tahun
                        sekali</option>
                    <option {{ $setting->interval_waktu == 4 ? 'selected' : '' }} value="4">4 bulan/tahun sekali
                    </option>
                </select>
                <p class="mt-2 text-sm text-gray-500">Pilih pembayaran akan dilakukan berapa minggu/bulan/tahun sekali
                </p>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
        </form>
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>
