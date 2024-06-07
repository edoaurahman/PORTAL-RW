<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<x-layout.user-layout>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $error }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg onclick="this.parentElement.parentElement.style.display='none'"
                        class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1 1 0 01-1.414 0L10 10.414l-2.935 2.435a1 1 0 01-1.414-1.435l3-2.5a1 1 0 011.414 0l3 2.5a1 1 0 010 1.435z" />
                    </svg>
                </span>
            </div>
        @endforeach
    @endif

    <form class="hero max-w-6xl mx-auto font-sans py-20 sm:px-0 px-10" action="{{ route('user.umkm.store') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-300 dark:text-white">Request
                    Pendaftaran UMKM
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-400 text-justify">Dalam proses pencatatan
                    data UMKM,
                    langkah awal yang
                    penting adalah pembuatan data yang akurat dan komprehensif. Melalui formulir ini, Anda dapat dengan
                    mudah mencatat informasi penting tentang UMKM, termasuk nama UMKM, jadwal operasional, kategori
                    produk atau layanan, serta unggahan gambar cover dan slide untuk memberikan gambaran yang jelas
                    tentang bisnis UMKM tersebut</p>

                <div class="mt-10 gap-x-6 gap-y-8">
                    <div class="sm:col-span-4">
                        <label for="username"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300 dark:text-gray-100">Nama
                            Usaha
                            Mikro Kecil dan Menengah (UMKM)</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" value="{{ old('nama_umkm') }}" name="nama_umkm" id="nama_umkm"
                                    required autocomplete="off"
                                    class="block flex-1 border-0 bg-transparent ml-1 py-1.5 pl-1 text-gray-900 dark:text-gray-300 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Toko..">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full mt-4">
                        <label for="cover-photo"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300 dark:text-gray-100">Cover
                            photo</label>
                        <div
                            class="mt-2 flex  justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="">

                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" id="fortInput">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <img id="imagePreview" class="hidden mx-auto h-[400px]" src="#"
                                        alt="Image Preview">
                                    <div class="mt-4 flex text-sm justify-center leading-6 text-gray-600">
                                        <label for="cover"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span id="changetext" class="px-2">Upload a file</span>
                                            <input type="file" class="sr-only" name="cover" id="cover"
                                                accept="image/*" required>
                                        </label>
                                        <p class="pl-1 dark:text-gray-300">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600 dark:text-gray-100">PNG, JPG, GIF max 2MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-300 dark:text-gray-100">
                    Informasi Data</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-300">Tersedia informasi terbaru mengenai
                    jam operasional dan
                    layanan UMKM, lengkap dengan kategori produk, waktu buka dan tutup.</p>

                <div class=" mt-10">
                    <div id="time-range-container" class="mt-4 grid grid-cols-2 gap-4 mb-6 ">
                        <div>
                            <label for="start-time"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 dark:text-white">Jam
                                Buka:</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" id="start_time" name="start_time"
                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="01:00" max="18:00" value="00:00" required />
                            </div>
                        </div>
                        <div>
                            <label for="end-time"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 dark:text-white">Jam
                                Tutup:</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" id="end_time" name="end_time"
                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="01:00" max="00:00" value="00:00" required />
                            </div>
                        </div>
                    </div>
                </div>

                <fieldset class="mt-10">
                    <legend
                        class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300 dark:text-gray-100">
                        Pilih Hari Buka
                    </legend>
                    <div class="mt-4 space-y-3 text-gray-900 dark:text-gray-300 dark:text-gray-300">
                        <div class="flex items-center gap-x-3">
                            <input id="Senin" value="Senin" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Senin" class="block text-sm font-medium leading-6">Senin</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Selasa" value="Selasa" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Selasa" class="block text-sm font-medium leading-6">Selasa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Rabu" value="Rabu" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Rabu" class="block text-sm font-medium leading-6">Rabu</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Kamis" value="Kamis" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Kamis" class="block text-sm font-medium leading-6">Kamis</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Jumat" value="Jumat" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Jumat" class="block text-sm font-medium leading-6">Jumat</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Sabtu" value="Sabtu" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Sabtu" class="block text-sm font-medium leading-6">Sabtu</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Minggu" value="Minggu" name="hari[]" type="checkbox"
                                class="h-4 w-4 border-gray-300">
                            <label for="Minggu" class="block text-sm font-medium leading-6">Minggu</label>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="mt-10">
                    <legend
                        class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300 dark:text-gray-100">
                        Pilih Kategori
                        Mikro Kecil dan
                        Menengah (UMKM)</legend>
                    <div class="mt-4 space-y-3 text-gray-900 dark:text-gray-300 dark:text-gray-300">
                        @foreach ($kategori as $item)
                            <div class="flex items-center gap-x-3">
                                <input type="checkbox" id="list_kategori-{{ $item->id_kategori }}"
                                    name="list_kategori[]" value="{{ $item->id_kategori }}" multiple
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="list_kategori-{{ $item->id_kategori }}"
                                    class="block text-sm font-medium leading-6 ">{{ $item->nama_kategori }}</label>
                            </div>
                        @endforeach
                    </div>
                </fieldset>

            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-300 dark:text-gray-100">
                    Deskripsi
                    Mikro Kecil dan Menengah (UMKM)
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 text-justify dark:text-gray-300">Disini Anda dapat
                    memasukkan
                    beberapa produk anda yang
                    akan dijadikan slide. Di dalam deskripsi anda dapat memasukkan link e-commerce, peta maps, gambar,
                    price list , dan sebagainya</p>

                <div class="mt-10 space-y-10">
                    <div class="col-span-full mt-4">
                        <label for="cover-photo"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300 dark:text-gray-100">Slider
                            photo
                            header UMKM</label>
                        <div
                            class="mt-2 flex  justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true" id="fortInputSlide">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div id="imagePreviewContainer" class="hidden grid-cols-3 gap-4"></div>
                                    <div class="mt-4 flex text-sm justify-center leading-6 text-gray-600">
                                        <label for="slide"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span id="changetextslide" class="px-2">Upload a file</span>
                                            <input type="file" class="sr-only" name="slide[]" id="slide"
                                                multiple accept="image/*">
                                        </label>
                                        <p class="pl-1  dark:text-gray-300">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600 dark:text-gray-300">PNG, JPG, GIF max 2MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 rounded-lg">
                        <textarea id="summernote" name="isi">{{ old('deskripsi') ?? '### Tulis Deskripsi UMKM Anda disini ###' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('user.umkm.dashboard') }}">
                    <button type="button"
                        class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Cancel</button></a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </div>
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

    document.getElementById('cover').addEventListener('change', function(event) {
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

        document.getElementById('fortInput').classList.add('hidden');
        document.getElementById('changetext').innerText = 'Change a file';
    });

    document.getElementById('slide').addEventListener('change', function(event) {
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        imagePreviewContainer.innerHTML = ''; // Kosongkan container

        const files = event.target.files;

        if (files.length > 0) {
            imagePreviewContainer.classList.remove('hidden'); // Tampilkan container
            imagePreviewContainer.classList.add('grid'); // Tambahkan kelas grid
            Array.from(files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('max-w-full'); // Tambahkan kelas untuk styling
                    img.alt = 'Image Preview';

                    imagePreviewContainer.appendChild(img);
                }

                reader.readAsDataURL(file);
            });
        } else {
            imagePreviewContainer.classList.add('hidden'); // Sembunyikan container jika tidak ada file
        }
        document.getElementById('fortInputSlide').classList.add('hidden');
        document.getElementById('changetextslide').innerText = 'Change a file';
    });
</script>
