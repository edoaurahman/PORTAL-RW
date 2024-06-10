<div id="alert-additional-content-3"
    class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-[#33096e] dark:text-green-400 dark:border-green-800"
    role="alert">
    <div class="flex items-center">
        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <h3 class="text-lg font-medium">Berita sudah di publish</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
        {{ $judul }}
    </div>
    <div class="flex">
        <a href="{{ route('user.berita.detail', $slug) }}">
            <button type="button"
                class="text-white gap-1 bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="fa fa-eye" aria-hidden="true"></i>
                Lihat
            </button>
        </a>

        <a href="{{ route('user.berita.edit', $id_berita) }}">
            <button type="button"
                class="text-white gap-1 bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Edit
            </button>
        </a>

        <form action="{{ route('user.berita.delete', $id_berita) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="text-white gap-1 bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Delete
            </button>
        </form>
    </div>
</div>
