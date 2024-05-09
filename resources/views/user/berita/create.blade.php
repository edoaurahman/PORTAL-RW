{{-- <x-layout.user-layout>
    <style>
        /* set ckeditor height */
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>
    <div class="px-20">
        <form action="{{ route('user.berita.store') }}" method="post">
            @csrf
            <label for="">Title</label>
            <input type="text" name="title">
            <label for="">Isi</label>
            <textarea name="content" id="editor" name="isi" onchange="checkImage()"></textarea>
            <input type="submit" value="Simpan">
        </form>
    </div>
    <div class="mt-80"></div>
</x-layout.user-layout>

<script src="{{ asset('assets/js/texteditor/ckeditor.js') }}"></script>
<script type="module">
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                // Upload the images to the server using the CKFinder QuickUpload command.
                uploadUrl: "{{ route('user.berita.ckfinderconnector', ['_token' => csrf_token()]) }}",
                // Define the CKFinder configuration (if necessary).
                options: {
                    resourceType: 'Images',
                },
            },
        })
        .catch(error => {
            console.error(error);
        });
</script>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summernote</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/summernote/summernote.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/js/summernote/summernote.min.css') }}">
</head>

<body>
    <form action="{{ route('user.berita.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="judul" placeholder="Judul">
        <input type="file" name="gambar">
        <textarea id="summernote" name="isi"></textarea>
        <input type="submit" value="Simpan">
    </form>

</body>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

</html>
