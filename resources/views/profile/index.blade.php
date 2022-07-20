<x-app-layout>
    <x-slot name="header">

    <!-- Breadcrumbs -->
    <div class="text-sm breadcrumbs border rounded bg-gray-100 mt-1 pl-2 mb-5">
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house p-1"></i> Dashboard</a></li> 
                <li>Profile</li> 
            </ul>
        </div>



        <!--Profile header -->
    <div class="border  border-black rounded bg-white">
        <div class="grid grid-cols-1 gap-1 p-1 my-10 h-10">
            <div class="text-3xl pl-4">
                <i class="fa fa-user"></i> My Profile
            </div>           
        </div>
        <!-- Profile Body -->
        <div class="grid grid-cols-1 gap-1">
                <div class="overflow-x-auto" >
                    <table class="table w-full" align="left" >
                        <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>Nama</th>
                            <th class="w-10">:</th>
                            <th>{{ $user->name }}</th>
                            <th></th>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <th>{{ $user->email }}</th>
                            <th></th>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>No Hanhphone</th>
                            <th>:</th>
                            <th>{{ $user->nohp }}</th>
                            <th></th>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th>{{ $user->alamat }}</th>
                            <th></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
        <!-- Edit Profile -->
    <div class="border border-black rounded bg-white mt-5">
        <div class="grid grid-cols-1 gap-1 p-1 my-10 h-10">
            <div class="text-3xl">
                <i class="fa fa-edit pl-4"></i> Edit Profile
            </div>           
        </div>
        <!-- Profile Form -->
        <form method="post" action="/profile">
            <div class="grid grid-cols-2 gap-6 mx-4">
            @csrf

            <!-- Name -->
            <div class="mt-2">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}"/>
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
            </div>

            <!-- No Handphone -->
            <div class="mt-2">
                <x-label for="nohp" :value="__('No Handphone')" />

                <x-input id="nohp" class="block mt-1 w-full" type="number" name="nohp" value="{{ $user->nohp }}" required />
            </div>

            <!-- Alamat -->
            <div class="mt-2 ">
                <x-label for="alamat" value="Alamat" />
                <textarea name="alamat" class="form-control border-gray-300 w-full rounded" id="alamat"  required ></textarea>
            </div>

            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"/>
            </div>

            <div class="flex items-end justify-end my-4">
                <x-button class="ml-4" type="submit">
                    Update
                </x-button>
            </div>
        </div>
        </form>
    </div>
    </x-slot>



    
</x-app-layout>
