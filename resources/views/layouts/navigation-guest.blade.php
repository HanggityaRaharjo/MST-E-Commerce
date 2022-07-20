<body>
        <div class="grid grid-cols-2 gap-1 w-screen h-screen">
            <!-- Session Status -->
              <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

            <!-- Validation Errors -->
            <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
            <div class="m-auto">
                kotak1
                <img class='animate-bounce border w-28' src="images/logo-polos.png" alt="">
            </div>
            <div>Kotak2
            <div class="my-auto ">
              aaa
                <!-- form -->
                <div class="form border border-black bg-gray-100 rounded mt-20 m-5">

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
                </div>
            </div>



        </div>
    </body>