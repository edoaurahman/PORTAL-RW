<div id="alert-additional-content-4"
    class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-[#33096e] dark:text-yellow-300 dark:border-yellow-800"
    role="alert">
    <div class="flex items-center">
        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <h3 class="text-lg font-medium">Berita dalam pengecekan</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
        {{ $judul }}
    </div>
    <div class="flex">
        <a href="{{ route('user.berita.detail', $slug) }}">
            <button type="button"
                class="text-white gap-1 bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-yellow-300 dark:text-gray-800 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">
                <i class="fa fa-eye" aria-hidden="true"></i>
                Lihat
            </button>
        </a>

        <a href="{{ route('user.berita.edit', $id_berita) }}">
            <button type="button"
                class="text-white gap-1 bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-yellow-300 dark:text-gray-800 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Edit
            </button>
        </a>

        <form action="{{ route('user.berita.delete', $id_berita) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="text-white gap-1 bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-yellow-300 dark:text-gray-800 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Delete
            </button>
        </form>
    </div>
</div>
