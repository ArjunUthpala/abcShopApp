<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
              <!-- Scripts -->
              @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                  
                        <a href="{{ route('login') }}" class="bg-transparent hover:bg-blue-500 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-transparent hover:bg-blue-500 text-gray-500 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="col">
                <div class="m-5" style=" text-align: center;">
                    <h1 class="text-5xl text-gray-500">Welcome to</h1>
                </div>
               <div>
                <h1 class="text-8xl text-white">ABC Shop App</h1>
               </div>
            </div>
           
      
        </div>
    </body>
</html>
