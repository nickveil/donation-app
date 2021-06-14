<x-guest-layout>
    {{-- <div class="text-blueGray-700 antialiased">
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
 
        </nav>
        <main>
            <section class="relative w-full h-full py-40 min-h-screen"> --}}
                <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
                    style="background-image: url(img/register_bg_2.png)"></div>
                <div class="container mx-auto px-4 h-full">
                    <div class="flex content-center items-center justify-center h-full">
                        <div class="w-full lg:w-4/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                                <div class="rounded-t mb-0 px-6 py-6">
                                    <div class="text-center mb-3">
                                        <h6 class="text-blueGray-500 text-lg font-bold">
                                            Sign in with credentials
                                        </h6>
                                    </div>
                                    {{-- <div class="btn-wrapper text-center">
                                        <button
                                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                            type="button">
                                            <img alt="..." class="w-5 mr-1" src="img/github.svg" />Github</button><button
                                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                            type="button">
                                            <img alt="..." class="w-5 mr-1" src="img/google.svg" />Google
                                        </button>
                                    </div> --}}
                                    <hr class="mt-6 border-b-1 border-blueGray-300" />
                                </div>
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                    {{-- <div class="text-blueGray-400 text-center mb-3 font-bold">
                                        <small>Or sign in with credentials</small>
                                    </div> --}}
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="email" :value="__('Email')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="text-center mt-6">
                                            <x-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex flex-wrap mt-6">
                                <div class="w-1/2">
                                    <a href="#pablo" class="text-blueGray-200"><small>Forgot password?</small></a>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="./register.html" class="text-blueGray-200"><small>Create new
                                            account</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
                    <div class="container mx-auto px-4">
                        <hr class="mb-6 border-b-1 border-blueGray-600" />
                        <div class="flex flex-wrap items-center md:justify-between justify-center">
                            <div class="w-full md:w-4/12 px-4">
                                <div class="text-sm text-white font-semibold py-1 text-center md:text-left">
                                    Copyright © <span id="get-current-year"></span>
                                    <a href="https://www.creative-tim.com?ref=njs-login"
                                        class="text-white hover:text-blueGray-300 text-sm font-semibold py-1">Donate App</a>
                                </div>
                            </div>
                            <div class="w-full md:w-8/12 px-4">
                                <ul class="flex flex-wrap list-none md:justify-end justify-center">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
        </main>
    </div> --}}


    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
