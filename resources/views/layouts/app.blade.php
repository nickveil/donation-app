<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link  rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"/>
        <!-- Styles -->
        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/tailwind.config.js') }}" defer></script>
    </head>
    <body class="text-blueGray-700 antialiased">
        <div id="root">
            <!-- Left Nav Bar -->
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
            @include('layouts._footer')
        </div>
    </body>
</html>
