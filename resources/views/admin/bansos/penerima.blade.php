<x-layout.admin-layout>
    <div class="relative">

        <!-- Start Header Content -->
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>BANSOS</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Bansos
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
        <form action="" method="get" class="flex items-center mb-2">
            <input type="month" id="month" name="date" class="rounded-lg border-gray-300 px-3 py-2 mr-2" required>
            <input type="submit" value="Filter" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800">
        </form>
        
        <!-- List Penerima -->
        <div class="flex flex-nowrap relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama Kepala Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No KK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penerima as $item)
                        <tr
                            class="whitespace-nowrap bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>{{ $item->kk->kepalaKeluarga->nama }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>{{ $item->no_kk }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    {{ $item->status == 'approved' ? 'Di Proses' : ($item->status == 'done' ? 'Selesai' : '') }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.bansos.show', $item->id_bansos) }}">
                                    <button class="font-medium text-white bg-green-400 p-2  rounded">
                                        Detail
                                    </button>
                                </a>
                                <button @click='showStatusForm(@json($item))'
                                    data-modal-target="status-penerima" data-modal-toggle="status-penerima"
                                    class="font-medium text-white bg-yellow-400 p-2  rounded">Set Status</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            {{ $penerima->links() }}
        </div>
    </div>
    <x-partials.admin.bansos.set-penerima />
</x-layout.admin-layout>
<script>
    // set month now
    const month = document.getElementById('month');
    const date = new Date();
    const monthNow = date.getMonth() + 1;
    const yearNow = date.getFullYear();
    month.value = `${yearNow}-${monthNow < 10 ? '0' + monthNow : monthNow}`;
</script>
