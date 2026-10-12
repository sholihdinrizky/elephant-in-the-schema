<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portal · Dashboard</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#1b1b18] text-white font-sans antialiased min-h-screen flex flex-col">
        @include('layouts.navigation')

        @isset($header)
            <header class="border-b border-white/10">
                <div class="max-w-6xl mx-auto py-5 px-6">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="flex-1">
            {{ $slot }}
        </main>

        <footer class="border-t border-white/10 py-6 text-center text-xs text-zinc-500">
            &copy; {{ date('Y') }} PBKK Kelas B · Departemen Teknik Informatika ITS
        </footer>
    </body>
</html>
