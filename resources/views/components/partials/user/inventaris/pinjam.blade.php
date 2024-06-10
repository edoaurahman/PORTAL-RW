<!-- Main modal Add Penduduk -->
<div>
    <form action="{{ route('user.inventaris.pinjam') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div id="pinjam-inventaris" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            
            <div class="relative p-4 w-full max-w-2xl max-h-[80%]">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-[#1f1345]">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            pinjam inventaris
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="pinjam-inventaris">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body Form -->
                    <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[50vh]">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama inventaris</label>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input type="hidden" name="id_inventaris">
                            <input readonly autocomplete="off" required name="nama" type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full ps-10 p-2.5  dark:bg-[#2d1c63] dark:border-purple-600 dark:placeholder-purple-700 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="">
                        </div>

                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jumlah</label>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input autocomplete="off" required name="jumlah" type="number" min="1" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full ps-10 p-2.5  dark:bg-[#2d1c63] dark:border-purple-600 dark:placeholder-purple-700 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Masukkan jumlah">
                        </div>

                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Ajukan Peminjaman</button>
                            <button data-modal-hide="pinjam-inventaris" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-purple-700 dark:bg-purple-800 dark:text-purple-400 dark:border-purple-600 dark:hover:text-white dark:hover:bg-purple-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>

<script>
    function showpinjam(e) {
        console.log(e);
        const form = document.getElementById('pinjam-inventaris');
        form.querySelector('input[name="id_inventaris"]').value = e.id_inventaris;
        form.querySelector('input[name="nama"]').value = e.nama;
        // max jumlah
        form.querySelector('input[name="jumlah"]').setAttribute('max', e.jumlah);

    }
</script>