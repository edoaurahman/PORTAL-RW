<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>Peminjaman</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    inventaris
                    <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    peminjaman
                </small>
                </small>
                
            </h3>
        </div>
        
        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
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
                    @foreach ($peminjaman as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->inventaris->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                @if ($item->status=='pending')
                                    <form action="{{ route('admin.inventaris.peminjaman.status') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_peminjaman" value="{{ $item->id_peminjaman }}">
                                    <input type="hidden" name="id_inventaris" value="{{ $item->id_inventaris }}">
                                    <input type="hidden" name="status" value="approved">
                                    <button type="submit">
                                        <div
                                            class="font-medium text-white bg-green-400 p-2 dark:text-white rounded inline-flex items-center gap-1">
                                            <i class="fa-regular fa-circle-check"></i>
                                            Accept
                                        </div>
                                    </button>
                                </form>
                                <form action="{{ route('admin.inventaris.peminjaman.status') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_peminjaman" value="{{ $item->id_peminjaman }}">
                                    <input type="hidden" name="id_inventaris" value="{{ $item->id_inventaris }}">
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit">
                                        <div
                                            class="font-medium text-white bg-red-500 p-2 dark:text-white rounded inline-flex items-center gap-1">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                            Reject
                                        </div>
                                    </button>
                                </form>
                                @endif
                                
                                @if ($item->status == 'approved')
                                    <form action="{{ route('admin.inventaris.peminjaman.status') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_peminjaman" value="{{ $item->id_peminjaman }}">
                                    <input type="hidden" name="id_inventaris" value="{{ $item->id_inventaris }}">
                                    <input type="hidden" name="status" value="done">
                                    <button type="submit">
                                        <div
                                            class="font-medium text-white bg-purple-500 p-2 dark:text-white rounded inline-flex items-center gap-1">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                            done
                                        </div>
                                    </button>
                                </form>
                                @endif
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>
