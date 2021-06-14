<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">

        </nav>
        <main>
            <div class="text-blueGray-700 antialiased">
                <section class="relative w-full h-full py-40 min-h-screen">
                    <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
                        style="background-image: url(img/register_bg_2.png)"></div>
                    {{-- <div class="font-sans text-gray-900 antialiased"> --}}
                    {{ $slot }}
                    {{-- </div> --}}
                    <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
                        <div class="container mx-auto px-4">
                            <hr class="mb-6 border-b-1 border-blueGray-600" />
                            <div class="flex flex-wrap items-center md:justify-between justify-center">
                                <div class="w-full md:w-4/12 px-4">
                                    <div class="text-sm text-white font-semibold py-1 text-center md:text-left">
                                        Copyright © <span id="get-current-year"></span>
                                        <a href="https://www.creative-tim.com?ref=njs-login"
                                            class="text-white hover:text-blueGray-300 text-sm font-semibold py-1">Donate
                                            App</a>
                                    </div>
                                </div>
                                <div class="w-full md:w-8/12 px-4">
                                    {{-- <ul class="flex flex-wrap list-none md:justify-end justify-center">
                                                <li>
                                                    <a href="https://www.creative-tim.com?ref=njs-login"
                                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Creative
                                                        Tim</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.creative-tim.com/presentation?ref=njs-login"
                                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">About
                                                        Us</a>
                                                </li>
                                                <li>
                                                    <a href="http://blog.creative-tim.com?ref=njs-login"
                                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-login"
                                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">MIT
                                                        License</a>
                                                </li>
                                            </ul> --}}
                                </div>
                            </div>
                        </div>
                    </footer>
                </section>
            </main>
        </div>
    </body>
</html>
