<x-layout.admin-layout>
    <div class="relative">
        <div class="mb-5">
            <div class="mb-2 text-xl">
                <h1><strong>NEWS</strong></h1>
            </div>
            <h3 class="text-muted">
                ADMIN
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    News
                </small>
            </h3>
        </div>
        <!-- Start Body Content -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-graydark dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Posting
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author
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
                    @foreach ($berita as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-violet-300 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->judul }}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ $item->sampul }}" class="max-w-15" alt="gambar sampul berita">
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->tanggal_posting }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->author }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <form action="{{ route('user.berita.status') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_berita" value="{{ $item->id_berita }}">
                                    <input type="hidden" name="status" value="publish">
                                    <button type="submit">
                                        <div
                                            class="font-medium text-white bg-ungu p-2 dark:text-white rounded inline-flex items-center gap-1">
                                            <i class="fa-regular fa-circle-check"></i>
                                            Publish
                                        </div>
                                    </button>
                                </form>
                                <form action="{{ route('user.berita.status') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_berita" value="{{ $item->id_berita }}">
                                    <input type="hidden" name="status" value="reject">
                                    <button type="submit">
                                        <div
                                            class="font-medium text-white bg-ungu p-2 dark:text-white rounded inline-flex items-center gap-1">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                            Reject
                                        </div>
                                    </button>
                                </form>
                                <a href="{{ route('user.berita.detail', $item->slug) }}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-3 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
        <!-- End Body Content -->
    </div>
</x-layout.admin-layout>
