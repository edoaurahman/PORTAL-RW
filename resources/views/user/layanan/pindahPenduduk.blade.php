<div x-data="tableData" class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full">
    <div class="p-4  ml-[77px] lg:ml-64">
        <div class="p-4 mt-14">

            <div
                class="px-4 py-2 mb-5 rounded-md shadow-md flex items-center gap-2 bg-white font-normal text-sm dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                <i class="fa-solid fa-clipboard-list fa-sm dark:text-gray-400 group-hover:text-white"></i>
                Admin / Report
            </div>

            <div class="pb-4  flex justify-between">
                <!-- Searching -->
                <div class="shadow-md rounded-lg">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div>
                </div>

                <!-- Button add report -->
                <form @submit.prevent="handleSubmit()" method="POST" class="flex w-[50%] items-center justify-end"
                    id="getMonthReport">
                    <div class="w-[35%] mx-1">
                        <select id="bulan" name="month" id="month"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </select>
                    </div>
                    <div class="w-[35%] mx-1">
                        <input name="year" type="number" value="2023"
                            class="w-full spin-gone bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" />
                    </div>
                    <div class="mx-1">
                        <button
                            class="px-5 min-w-max py-2.5 !bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:!bg-bingu_hover"
                            type="submit">
                            Print Multiple Report
                        </button>
                    </div>

                </form>
            </div>

            <!-- table -->
            <section id="report" class="shadow-lg sm:rounded-lg">
                <div x-init="$nextTick(() => {paggination(1) })">
                    <div class="overflow-x-auto rounded-md overflow-hidden">
                        <table
                            class="w-[1200px] lg:w-full overflow-y-auto text-sm text-left text-gray-500 dark:text-gray-400 table-auto relative"
                            id="table">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="w-[15%] px-6 py-3">
                                        Peminjam
                                    </th>
                                    <th scope="col" class=" px-6 py-3">
                                        Tanggal Pesan
                                    </th>
                                    <th scope="col" class=" px-6 py-3">
                                        Tanggal Pakai
                                    </th>
                                    <th scope="col" class="w-[15%] px-6 py-3">
                                        Dosen Penanggung Jawab
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kelas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ruang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam Mulai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam Selesai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lampiran
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <template x-for="item in tableData">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <template x-if="item.mahasiswa">
                                            <td x-text="item.mahasiswa" class="px-4 py-3">
                                            </td>
                                        </template>
                                        <template x-if="!item.mahasiswa">
                                            <td x-text="item.dosen" class="px-4 py-3">
                                            </td>
                                        </template>
                                        <td x-text="item.tanggal_pesan" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.tanggal_pakai" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.dosen" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.kelas" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.ruang" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.jam_mulai" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.jam_selesai" class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                            <a :href="'/assets/lampiran/' + item.lampiran" target="_blank">
                                                <div
                                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-bingu rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-bingu dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Lihat Lampiran
                                                </div>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <!-- ########### Ini Modal YGY ########### -->
                                            <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                                <!-- Trigger for Modal -->
                                                <button type="button" @click="showModal = true"
                                                    x-text="item && item.keterangan ? item.keterangan.substring(0,20) + '...' : '' "></button>
                                                <!-- Modal -->
                                                <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                                                    x-show="showModal">
                                                    <!-- Modal inner -->
                                                    <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg dark:bg-gray-600"
                                                        @click.away="showModal = false"
                                                        x-transition:enter="motion-safe:ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 scale-90"
                                                        x-transition:enter-end="opacity-100 scale-100">
                                                        <!-- Title / Close-->
                                                        <div class="flex items-center justify-between">
                                                            <h5 class="mr-3 text-black max-w-none dark:text-white">
                                                                Keterangan</h5>
                                                            <button type="button" class="z-50 cursor-pointer"
                                                                @click="showModal = false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="min-h-[100px] min-w-[300px] pt-4 max-h-[80vh] overflow-y-auto text-gray-500 dark:text-gray-300">
                                                            <p x-text="item.keterangan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a class="px-3 py-1 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover"
                                                :href="'/admin/pdf/' + item.id_booking">
                                                Cetak
                                            </a>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <nav class="w-full flex items-center justify-end py-4 px-3" aria-label="Table navigation">
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#report" @click="prev()"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                                <li>
                                    <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#report"
                                        class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400  dark:hover:text-white hover:text-black">
                                        <?= $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="#report" @click="next()"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Main modal -->
<!-- <div id="add-report-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full"> -->
<!-- <div class="relative p-4 w-full max-w-md max-h-full"> -->
<!-- Modal content -->
<!-- <div class="relative bg-white rounded-lg shadow dark:bg-gray-700"> -->
<!-- Modal header -->
<!-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add New Ruang
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-report-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div> -->
<!-- Modal body -->
<!-- <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruang</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RT_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruang</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="jenis-ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ruang</label>
                        <select id="jenis-ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Ruang</option>
                            <option value="ruang-teori">Ruang Teori</option>
                            <option value="ruang-praktikum">Ruang Praktikum</option>
                            <option value="ruang-gabungan">Ruang Gabungan</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
                        <select id="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Lantai</option>
                            <option value="lantai-5">Lantai 5</option>
                            <option value="lantai-6">Lantai 6</option>
                            <option value="lantai-7">Lantai 7</option>
                            <option value="lantai-8">Lantai 8</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Ruang</label>
                        <textarea id="deskripsi ruang" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi ruang"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar-ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Ruangan</label>
                        <input type="file" name="gambar-ruang" id="gambar-ruang" class=" text-white">
                    </div>
                </div>
                <div class="flex w-full justify-end items-center">
                    <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add
                    </button>
                </div>
            </form> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<style lang="postcss">
    .spin-gone::-webkit-inner-spin-button {
        -webkit-appearance: none;
        appearance: none;
    }
</style>
<script>
    let bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    let bulanIni = new Date().getMonth(); // mendapatkan indeks bulan ini (0-11)

    for (let i = 0; i < bulan.length; i++) {
        let option = document.createElement('option');
        option.text = bulan[i];
        option.value = i + 1;

        if (i === bulanIni) {
            option.selected = true; // menandai bulan ini sebagai selected
        }

        document.getElementById('bulan').appendChild(option);
    }
    // action modal

    let buttonAction = document.querySelectorAll("i");

    document.querySelector("#report").addEventListener("click", (e) => {
        buttonAction.forEach(node => {
            try {
                if (node === e.target) {
                    node.nextElementSibling.classList.toggle("hidden")
                } else if (e.target !== node && !e.target.classList.contains("delete-modal") && !e.target.classList.contains("edit-modal")) {
                    node.nextElementSibling.classList.add("hidden");
                }
            } catch (error) { }
        });
    });

    // table & pagination
    const buttonPaggination = document.querySelectorAll('#button-pagination');

    function setActive(current_page) {
        buttonPaggination.forEach((button) => {
            if (button.innerText == current_page) {
                button.classList.add('dark:bg-bingu');
                button.classList.add('dark:text-white');
                button.classList.remove('dark:bg-gray-800');
                button.classList.add('bg-bingu');
                button.classList.add('hover:bg-bingu_hover');
                button.classList.add('dark:hover:bg-bingu_hover');
                button.classList.add('hover:text-white');
                button.classList.remove('hover:text-black');
                button.classList.remove('hover:bg-gray-200');
                button.classList.remove('dark:hover:bg-gray-700');
                button.classList.add('text-white');
                button.classList.remove('bg-white');
            } else {
                button.classList.add('dark:bg-gray-800');
                button.classList.add('bg-white');
                button.classList.add('hover:text-black');
                button.classList.remove('dark:bg-bingu');
                button.classList.remove('dark:text-white');
                button.classList.remove('bg-bingu');
                button.classList.remove('hover:bg-bingu_hover');
                button.classList.remove('dark:hover:bg-bingu_hover');
                button.classList.remove('text-white');
                button.classList.remove('hover:text-white');
                button.classList.add('hover:bg-gray-200');
                button.classList.add('dark:hover:bg-gray-700');
            }
        });
    }

    document.addEventListener('alpine:init', () => {
        Alpine.data('tableData', () => ({
            tableData: null,
            current_page: 1,
            paggination(page = '1') {
                fetch('/api/report/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlReport;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    }).then(e => {
                        buttonAction = document.querySelectorAll("i");
                    });
            },
            next() {
                if (this.current_page == <?= $totalPage ?>) {
                    return;
                }
                fetch('/api/report/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlReport;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                fetch('/api/report/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlReport;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            handleSubmit() {
                let form = new FormData(document.getElementById('getMonthReport'));
                const month = form.get('month');
                const year = form.get('year');

                console.log(month, year);
                window.location = '/admin/print-report/' + month + '/' + year
            }
        }))
    })
</script>
</body>

</html>