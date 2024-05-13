<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTAL RW</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/user/style.css') }}">
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f1f4f5]" x-data="{ 'darkMode': true, }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
    <x-partials.user.nav />
    {{ $slot }}
    <x-partials.user.footer />
</body>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.directive('log', (el, {
            expression
        }, {
            evaluateLater,
            effect
        }) => {
            let getThingToLog = evaluateLater(expression)

            effect(() => {
                getThingToLog(thingToLog => {
                    console.log(thingToLog)
                })
            })
        })
    })
</script>

</html>
