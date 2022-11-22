<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@506&display=swap" rel="stylesheet">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-slate-800 dark:text-slate-200 font-primary">
    <div class="min-h-screen bg-slate-100 dark:bg-slate-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        <main>
            {{ $slot }}
        </main>
        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
