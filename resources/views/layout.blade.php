<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>This page is a @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    <link rel="stylesheet" href="{{URL('css/style.css')}}">
    </head>
    <body class="antialiased">
 
    <div class="relative" py-4 px-6>
           <nav>
           <a class="d" href="{{route('Home.index')}}">Home</a>
            <a class="f" href="{{route('Home.about')}}">About</a>
            <a class="d" href="{{route('Home.contact')}}">contact</a>
            <a class="f" href="{{route('computer.index')}}">computer</a>
            <a class="f" href="{{route('computer.create')}}">add computer</a>
           </nav>
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 light:bg-dots-lighter light:bg-gray-900 selection:bg-red-500 selection:text-white">
        @yield('content') 
    </body>
</html>
