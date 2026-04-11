<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/js/slider.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans ">
       <div class=" bg-bg">
             <header class="w-full py-4 flex justify-between items-center bg-stone-100 px-6">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <h1>Logo</h1>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    <livewire:hero />
                    <livewire:feature /> 
                    {{-- <livewire:OurTeam /> --}}
                    <livewire:faq />
       </div>
    </body>
</html>
