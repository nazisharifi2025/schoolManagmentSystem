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
   <x-app-layout>
  <div class=" min-h-screen h-fit w-full grid grid-cols-5">

    <livewire:dashboard.sidebar />
       <div class=" col-span-4 grid grid-cols-2 gap-2 h-full w-full ">
         <div class = "p-4 bg-white/70 h-fit">
            <h1>Employees statatistics</h1>
         </div>
         <div class = "p-4 bg-white/70 h-fit">
            <h1> Salaries statisticss
            </h1>
         </div>
         <div class = "p-4 bg-white/70 h-fit">
            <h1> Contracts statisticss
            </h1>
         </div>
         <div class = "p-4 bg-white/70 h-fit">
            <h1> Payroll statisticss
            </h1>
         </div>
         
       </div>
  </div>
</x-app-layout>
{{-- <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
    </body>
</html>

