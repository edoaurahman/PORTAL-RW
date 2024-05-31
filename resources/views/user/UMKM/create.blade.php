<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<x-layout.user-layout>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form class="hero max-w-6xl mx-auto font-sans py-20" action="{{ route('user.umkm.store') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" value="{{ old('nama_umkm') }}" name="nama_umkm" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    UMKM</label>
            </div>
        </div>

        <div class="">
            <p>cover</p>
            <div class="relative z-0 w-full my-5 group">
                <input type="file" name="cover" id="cover"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="cover"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max
                    2MB</label>
                <img id="imagePreview" class="hidden" src="#" alt="Image Preview">
            </div>
        </div>

        {{-- Pemilihan hari  --}}
        <div class=" py-2">
            <p class="mb-4">Buka hari</p>

            <div class="flex items-center ">
                <input id="default-checkbox-1" type="checkbox" value="Senin"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-1"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senin</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-2" type="checkbox" value="Selasa"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-2"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Selasa</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-3" type="checkbox" value="Rabu"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-3"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rabu</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-4" type="checkbox" value="Kamis"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-4"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kamis</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-5" type="checkbox" value="Jum'at"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-5"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jum'at</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-6" type="checkbox" value="Sabtu"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-6"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sabtu</label>
            </div>
            <div class="flex items-center ">
                <input id="default-checkbox-7" type="checkbox" value="Minggu"
                    name="hari[]
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                    focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600">
                <label for="default-checkbox-7"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Minggu</label>
            </div>

        </div>

        {{-- kategori umkm --}}
        <div x-data="{ open: false }" class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
            <label class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Kategori
                UMKM</label>
            <button @click="open = ! open" id="button_kategori"
                class="rounded text-white bg-black hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center"
                type="button">
                Kategori UMKM
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu lantai -->
            <div x-show="open" @click.outside="open = false"
                class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                    @foreach ($kategori as $item)
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input type="checkbox" id="list_kategori {{ $item->id_kategori }}" name="list_kategori[]"
                                value="{{ $item->id_kategori }}" name="kategori[]" multiple
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                            <label for="list_kategori{{ $item->id_kategori }}"
                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $item->nama_kategori }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Pemilihan waktu --}}
        <div class="w-[16rem]">
            <button id="selectTimeToggle" data-collapse-toggle="time-range-container" type="button"
                class="text-blue-700 dark:text-blue-500 text-base font-medium hover:underline p-0 inline-flex items-center mb-2">Select
                time <svg class="w-8 h-8 ms-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 10 4 4 4-4" />
                </svg>
            </button>
            <div id="time-range-container" class="max-w-[16rem] mx-auto grid grid-cols-2 gap-4 mb-2 hidden">
                <div>
                    <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                        time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="time" id="start_time" name="start_time"
                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="00:00" max="18:00" value="00:00" required />
                    </div>
                </div>
                <div>
                    <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                        time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="time" id="end_time" name="end_time"
                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="00:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </div>
        </div>

        {{-- slide  --}}
        <div class="relative z-0 w-full my-5 group">
            <input type="file" name="slide[]" id="slide" multiple accept="image/*"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="slide"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max
                2MB</label>
            <img id="imagePreview" class="hidden" src="#" alt="Image Preview">
        </div>

        <textarea id="summernote" name="isi">{{ old('deskripsi') ?? '### Tulis Berita disini ###' }}</textarea>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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
        } else {
            document.getElementById('imagePreview').src = "#";
        }
    });
</script>
