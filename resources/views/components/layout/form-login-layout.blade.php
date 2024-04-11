<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - PORTAL RW</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{--
    <x-partials.admin.nav /> --}}
    {{ $slot }}
    {{--
    <x-partials.admin.footer /> --}}
</body>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}">
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>

</html>
