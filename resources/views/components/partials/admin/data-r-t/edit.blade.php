<!-- Main modal Add Agenda -->
<div>
    <form id="form-edit-data-rt" action="{{ route('admin.data-rt.edit') }}" method="post">
        @csrf
        @method('PUT')
        <div id="edit-data-rt" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-[80%]">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Data
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="edit-data-rt">
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
                        <input type="hidden" name="id_akun">


                        <form class="max-w-sm mx-auto">
                            <label for="data-rt"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="data-rt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="nik">
                            </select>
                        </form>


                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                            Maps</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </span>
                            <input required name="link" type="text" id="link"
                                class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Link">
                        </div>

                        <!-- Modal footer -->
                        <div
                            class="flex
                                items-center pt-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 dark:bg-purple-700 dark:hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800">Update</button>
                            <button data-modal-hide="edit-data-rt" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    const formEdit = document.getElementById('form-edit-data-rt');

    function showEdit(e) {
        // console.log(e);
        formEdit.querySelector('input[name="id_akun"]').value = e.id_akun;
        try {
            formEdit.querySelector('input[name="link"]').value = e.link_maps.link;
        } catch (error) {
            formEdit.querySelector('input[name="link"]').value = '';
        }

        fetch('/api/data-rt/' + e.penduduk.alamat.rt)
            .then(response => response.json())
            .then(data => {
                // add options to select with id data-rt
                const select = formEdit.querySelector('#data-rt');
                select.innerHTML = '<option selected value="">Biarkan kosong jika tidak ingin merubah</option>';
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.penduduk.nik;
                    option.textContent = item.penduduk.nama + ' - ' + item.penduduk.nik;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error(error));
    }
</script>
