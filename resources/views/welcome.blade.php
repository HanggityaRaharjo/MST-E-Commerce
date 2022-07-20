<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MST | TEST</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/7fb1103fac.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="flex">
            <div class="m-auto my-5">
                <h1 class="font-bold">E-Commerce </h1>
            </div> 
        </div>
    <div class="hero min-h-screen -mt-10">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="font-bold pb-2 lg:text-4xl md:text-2xl">MST |
                <span class="bg-secondary border border-secondary rounded text-black animate-pulse ">Login Sekarang!</span> <i class="fa fa-cart-shopping"></i></h1>
                <p class="py-2 font-semibold">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
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

                            <a href="{{ route('register') }}" class="ml-3 p-2 btn btn-outline btn-secondary font-bold">Register</a>
                            <button class="ml-3 btn btn-secondary">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                    <div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
