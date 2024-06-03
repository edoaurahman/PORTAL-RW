<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>DATA UMKM</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    Data UMKM
                </small>
            </h3>
        </div>
        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama UMKM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori UMKM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama penduduk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($UMKM as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->nama_umkm }}
                            </th>
                            <td class="px-6 py-4">
                                @foreach ($item->listKategori as $list)
                                    @if ($loop->last)
                                        <p class="text-xs">{{ $list->kategori->nama_kategori }}</p>
                                    @else
                                        <p class="text-xs">{{ $list->kategori->nama_kategori }}, &nbsp;</p>
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->penduduk->nama }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                @if ($item->status == 'reject' || $item->status == 'pending')
                                    <form action="{{ route('admin.umkm.status') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_umkm" value="{{ $item->id_umkm }}">
                                        <input type="hidden" name="status" value="publish">
                                        <button type="submit">
                                            <div
                                                class="font-medium text-white bg-green-400 p-2 dark:text-white rounded inline-flex items-center gap-1">
                                                <i class="fa-regular fa-circle-check"></i>
                                                Publish
                                            </div>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.umkm.status') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_umkm" value="{{ $item->id_umkm }}">
                                        <input type="hidden" name="status" value="reject">
                                        <button type="submit">
                                            <div
                                                class="font-medium text-white bg-red-500 p-2 dark:text-white rounded inline-flex items-center gap-1">
                                                <i class="fa-regular fa-circle-xmark"></i>
                                                Reject
                                            </div>
                                        </button>
                                    </form>
                                @endif
                                <a href="{{ route('user.umkm.detail', $item->id_umkm) }}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-3 py-2 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                        Lihat
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="m-2">
            {{ $UMKM->links() }}
        </div>
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>
