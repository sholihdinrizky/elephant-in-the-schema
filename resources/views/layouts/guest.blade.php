<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portal</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#1b1b18] text-white font-sans antialiased min-h-screen flex flex-col items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <a href="/" class="text-2xl font-bold tracking-tight">Portal<span class="text-[#c4704b]">.</span></a>
            </div>
            {{ $slot }}
        </div>
    </body>
</html>
