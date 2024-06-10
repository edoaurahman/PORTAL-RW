<x-layout.user-layout>
    <section class="hero sm:max-w-6xl mx-auto font-sans py-20 sm:px-0 px-10">
        <div class="px-4 py-6 ">
            <div class="flex flex-col gap-y-4">
                <div class="gap-y-2 flex sm:flex-row flex-col justify-between items-center">
                    <div class="flex-1 space-y-2">
                        <div class="w-fit gap-x-2  small-badge flex flex-row  rounded-full items-center">
                            <i class="fa-solid fa-handshake"></i>
                            <p class=" sm:text-base font-normal text-black dark:text-white">
                                Riwayat Penerimaan Bansos
                            </p>
                        </div>
                        <h2 class="font-bold text-black dark:text-white sm:text-6xl text-2xl">Bansos Untuk Rakyat Yang
                            Membutuhkan
                        </h2>
                    </div>
                    <div class=" flex-1 text-base leading-loose text-black3">
                        <p class="text-sm text-black3 dark:text-gray-400">
                            Bantuan Sosial (Bansos) merupakan sebuah program yang bertujuan untuk memberikan dukungan
                            kepada masyarakat yang membutuhkan, terutama dalam kondisi-kondisi yang sulit seperti
                            bencana alam, krisis ekonomi, atau pandemi global. Program ini dirancang untuk memberikan
                            bantuan berupa pangan, sandang, papan, dan layanan kesehatan kepada individu atau keluarga
                            yang tidak mampu memenuhi kebutuhan dasar mereka sendiri. Dengan Bansos, diharapkan dapat
                            membantu meringankan beban ekonomi dan meningkatkan kualitas hidup mereka yang terpinggirkan
                            dan membutuhkan uluran tangan dari pemerintah dan masyarakat secara luas.
                        </p>
                        <div class="mt-7">
                            <button data-modal-target="add-bansos" data-modal-toggle="add-bansos"
                                class="rounded-lg hover:bg-indigo-900 text-sm bg-ungu dark:bg-purple-700 hover:dark:bg-purple-900 text-white py-3 px-7  font-semibold">Request
                                Bansos</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- List Bansos --}}
    <div class="max-w-6xl mx-auto font-sans pb-12 sm:px-0 px-5">
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

        <div class="flex flex-nowrap relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-purple-900 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pengajuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pesan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bansos as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-purple-800 dark:border-purple-700 hover:bg-gray-50 dark:hover:bg-purple-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $loop->iteration }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>{{ $item->no_kk }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    @php
                                        if ($item->status == 'approved') {
                                            echo 'Di Proses';
                                        } elseif ($item->status == 'done') {
                                            echo 'Selesai';
                                        } elseif ($item->status == 'rejected') {
                                            echo 'Ditolak';
                                        } else {
                                            echo 'Menunggu Verifikasi';
                                        }
                                    @endphp
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->alasan ?? '' }}
                                {{ $item->status == 'approved' ? 'Silahkan datang ke kantor desa untuk mengambil bansos' : '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- End List Berita --}}

    <section class="max-w-6xl mx-auto font-sans mb-60 bg-ungu dark:bg-purple-900 p-14 rounded-3xl z-20 relative ">
        <div class="items-center justify-between">
            <h5 class="mb-2 text-[20px] font-bold tracking-tight text-white dark:text-white">Mekanisme Penerimaan Bansos
            </h5>
            <ol class="space-y-1 text-white  list-inside gap-y-10">
                <li>
                    <span class="font-bold text-white">Pendaftaran: </span>Masyarakat yang membutuhkan bantuan
                    sosial pertama-tama melakukan pendaftaran. Ini bisa dilakukan melalui aplikasi online,
                    kantor pemerintah setempat, atau lembaga yang bertanggung jawab atas distribusi Bansos.
                </li>
                <li>
                    <span class="font-bold text-white">Penilaian Kelayakan: </span>Setelah data diverifikasi, dilakukan
                    penilaian kelayakan untuk menentukan apakah pemohon memenuhi syarat untuk menerima bantuan sosial.
                    Kriteria ini dapat mencakup tingkat pendapatan, jumlah tanggungan, dan faktor
                    lain yang relevan.
                </li>
                <li>
                    <span class="font-bold text-white">Penetapan Bantuan: </span>Jika pemohon dinyatakan layak, mereka
                    akan diberikan bantuan sesuai dengan jenis dan jumlah yang telah ditetapkan oleh program Bansos. Ini
                    bisa berupa paket sembako, bantuan tunai, atau layanan lain yang sesuai dengan kebutuhan mereka.
                </li>
                <li>
                    <span class="font-bold text-white">Distribusi Bantuan: </span>Setelah penetapan bantuan, langkah
                    terakhir adalah mendistribusikan bantuan kepada penerima yang telah disetujui. Hal ini dapat
                    dilakukan melalui pengiriman langsung ke rumah penerima, pengambilan di lokasi tertentu, atau
                    melalui agen distribusi yang ditunjuk oleh pemerintah setempat.
                </li>
            </ol>
        </div>
    </section>

    <x-partials.admin.bansos.add-bansos />

</x-layout.user-layout>
