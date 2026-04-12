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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans  ">
       <div class=" bg-bg">
             <header class="w-full py-4 z-50 flex justify-between items-center fixed top-0 right-0 border-brand backdrop-blur-xl border-b px-6">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <h1 class=" text-3xl font-bold font-serif">Logo</h1>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    <livewire:hero />
                    <livewire:feature /> 
                    <livewire:team />
                    <livewire:faq />
                    <livewire:footer />
       </div>
    </body>
</html>
