<!-- Main modal Add Agenda -->
<div>
    <form id="bansos" action="{{ route('user.bansos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="add-bansos" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-[80%]">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Penerima Bansos
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="add-bansos">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body Form -->
                    <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[50vh]">

                        <label for="no_kk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            KK</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                            </span>
                            <input readonly value="{{ auth()->user()->penduduk->no_kk }}" required name="no_kk"
                                type="number" id="no_kk"
                                class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="No KK">
                        </div>

                        <label for="gaji"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-money-bill"></i>
                            </span>
                            <select required value="{{ old('gaji') }}" id="gaji" name="gaji"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Pilih Gaji Anda</option>
                                <option value="1">Kurang dari 1 Juta</option>
                                <option value="2">1 Juta - 2 Juta</option>
                                <option value="3">2 Juta - 3 Juta</option>
                                <option value="4">3 Juta - 4 Juta</option>
                                <option value="5">Lebih dari 4 Juta</option>
                            </select>
                        </div>

                        <label for="jumlah_tanggungan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                            tanggungan"</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-money-bill"></i>
                            </span>
                            <select required value="{{ old('jumlah_tanggungan') }}" id="jumlah_tanggungan""
                                name="jumlah_tanggungan""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Pilih Jumlah Tanggungan Anda</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 atau lebih</option>
                            </select>
                        </div>

                        <label for="luas_tanah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas Tanah"</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-money-bill"></i>
                            </span>
                            <select required value="{{ old('luas_tanah') }}" id="luas_tanah" name="luas_tanah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Pilih Luas Tanah Anda</option>
                                <option value="1">Kurang dari 50 m²</option>
                                <option value="2">50 m² - 100 m²</option>
                                <option value="3">100 m² - 200 m²</option>
                                <option value="4">200 m² - 500 m²</option>
                                <option value="5">Lebih dari 500 m²</option>
                            </select>
                        </div>

                        <label for="kapasitas_listrik"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasistas
                            Listrik"</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-money-bill"></i>
                            </span>
                            <select required value="{{ old('kapasitas_listrik') }}" id="kapasitas_listrik"
                                name="kapasitas_listrik"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Pilih Kapasitas Listrik Anda</option>
                                <option value="1">450 VA</option>
                                <option value="2">900 VA</option>
                                <option value="3">1300 VA</option>
                                <option value="4">2200 VA</option>
                                <option value="5">Lebih dari 2200 VA</option>
                            </select>
                        </div>

                        <label for="jumlah_kendaraan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                            Kendaraan"</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-money-bill"></i>
                            </span>
                            <select required value="{{ old('jumlah_kendaraan') }}" id="jumlah_kendaraan"
                                name="jumlah_kendaraan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Pilih Jumlah Kendaraan Anda</option>
                                <option value="1">Tidak ada</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4 atau lebih</option>
                            </select>
                        </div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="foto_rumah">Foto Rumah</label>
                        <input value="{{ old('images') }}" name="images[]" required multiple accept="image/*"
                            min="3"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="foto_rumah" type="file">


                        <!-- Modal footer -->
                        <div class="flex items-center pt-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 dark:bg-purple-700 dark:hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800">Request</button>
                            <button data-modal-hide="add-bansos" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
<!-- Main modal Add Penduduk -->
<script>
    document.getElementById('bansos').addEventListener('submit', function(event) {
        var files = document.getElementById('foto_rumah').files;
        var minFiles = 2; // Minimum number of files required

        if (files.length < minFiles) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon pilih setidaknya ' + minFiles + ' file.');
        }
    });
</script>
