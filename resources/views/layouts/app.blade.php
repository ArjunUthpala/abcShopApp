<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-indigo-300 shadow" style="height: 50px">
                <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8" style=" text-align: center;">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
