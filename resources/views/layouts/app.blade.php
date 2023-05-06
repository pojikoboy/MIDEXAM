<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        @vite('resources/css/app.css')
    </head>
    <body>
        @include('layouts.inc.navbar')
        @yield('container')
        @include('layouts.inc.footer')
        {{-- @include('sweetalert::alert') --}}
        
        <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
        @include('sweetalert::alert')
        @yield('scripts')
    </body>
</html>