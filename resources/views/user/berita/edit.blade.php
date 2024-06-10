<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<x-layout.user-layout>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form class="mx-70 p-10 mt-5 bg-white rounded-xl" action="{{ route('user.berita.update') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id_berita" value="{{ $berita->id_berita }}">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" value="{{ $berita->judul }}" name="judul" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" value="{{ $berita->slug }}" name="slug" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="file" name="gambar" id="gambar"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder="Kosongkan jika tidak ingin di ubah" />
            <label for="gambar"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max
                2MB (Kosongkan jika tidak ingin diubah)</label>
            <img id="imagePreview" class="hidden" src="#" alt="Image Preview">

        </div>

        <img class="h-auto max-w-full" src="{{ $berita->sampul }}" alt="image description" id="old-image">


        <label>Kategori berita</label>
        <div
            class="mb-5 text-sm font-medium text-gray-900 border border-gray-400 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white grid grid-cols-4">
            @foreach ($kategori as $item)
                <div class="flex items-center ps-3 bordeer">
                    <input type="checkbox" value="{{ $item->id_kategori }}" name="kategori[]"
                        class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        @if (in_array($item->id_kategori, $berita->kategori->pluck('id_kategori')->toArray())) checked @endif>
                    <label for="vue-checkbox"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->nama_kategori }}</label>
                </div>
            @endforeach
        </div>
        <textarea id="summernote" name="isi">{{ $berita->isi }}</textarea>

        <button type="submit"
            class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    </form>

    <div class="mt-187.5"></div>
</x-layout.user-layout>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['font', ['fontsize', 'bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            height: 500,
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0',
                '3.0'
            ]

        });
    });


    document.getElementById('gambar').addEventListener('change', function(event) {
        // remove hidden class
        document.getElementById('imagePreview').classList.remove('hidden');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
            }

            reader.readAsDataURL(file);
            // hide old image
            document.getElementById('old-image').classList.add('hidden');
        } else {
            document.getElementById('imagePreview').src = "#";
        }
    });
</script>
