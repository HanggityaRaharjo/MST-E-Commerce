<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('/images/logo-example2.png') }}" class ="w-12"alt="{{ asset('/images/logo-example.png') }}">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <x-nav-link class="hover:text-green-400" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <i class="fa-solid fa-house pb-1 pr-1"></i>{{ __('home') }}
                    </x-nav-link>
                </div>

               
            </div>

            <!-- Settings Dropdown -->
           
            <!-- pembatas -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <?php
                        $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                        if(!empty($pesanan_utama))
                        {
                            $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
                        }
                    ?>
                    
                    <!-- keranjang -->
                    <div class="keranjang mr-2 hover:text-green-400">
                        <a href="/check-out" class="text-lg "><i class="fa-solid fa-cart-shopping"></i>
                    @if(!empty($notif))
                    <sup><span class="badge animate-bounce  border-red-400 bg-red-400 font-bold text-white ">{{ $notif }}</span></sup>
                    @endif
                    </a>
                    </div>
                    <!-- end keranjang -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
                            
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>  
                               
                    </x-slot>

                    
                    

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link href="/profile">                            
                                Profile
                            </x-dropdown-link>

                            <x-dropdown-link href="/history">                            
                                Riwayat Pesanan
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('home') }}
            </x-responsive-nav-link>
        </div>
        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="px-4">
                <i class="fa-solid fa-cart-shopping"></i>Keranjang 
                @if(!empty($notif))
                <span class="badge border-green-400 bg-green-400 font-bold text-black">{{ $notif }} </span>
                @endif
            </div>

            <div class="mt-3 space-y-1">
                <!-- My Profile -->
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('My Profile') }}
                    </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>
