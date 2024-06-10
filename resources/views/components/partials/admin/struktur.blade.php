<!-- Main modal Add Penduduk -->
<div>
    <form action="{{ route('admin.gambarstruktur.update') }}" method="post" enctype="multipart/form-data" id="form-struktur">

        @csrf
        @method('put')

        <div id="struktur" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            
            <div class="relative p-4 w-full max-w-2xl max-h-[80%]">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Ubah Struktur
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="struktur">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body Form -->
                    <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[50vh]">
                        

                        <input type="hidden" name="id_setting">

                        <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_input">Upload Gambar</label>
                        <input name="gambarstruktur" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="image_input_help" id="image_input" type="file" accept=".jpg, .jpeg, .png, .webp">

                        

                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-purple-800">Ubah</button>
                            <button data-modal-hide="struktur" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>

<script>
    function showEdit(e) {
        console.log(e);
        const form = document.getElementById('form-struktur');
        form.querySelector('input[name="id_setting"]').value = e.id_setting;

    }
</script>