<x-app-layout>
    <x-slot name="header">
        <!-- Kembali -->
        <a href="/dashboard" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i>back</a>
        <!-- Breadcrumbs -->
        <div class="text-sm breadcrumbs border rounded bg-gray-100 mt-1 pl-2">
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house p-1"></i> Dashboard</a></li> 
                <li>{{ $barang->kategori->name }}</li> 
                <li>{{ $barang->nama_barang }}</li> 
            </ul>            
        </div>
    </x-slot>

<!-- pembatas -->
    <div class="">
        
        <div class="grid grid-cols-2 gap-1">
            <div class="mx-auto">
                <h1 class="text-4xl mx-auto mt-6">{{ $barang->nama_barang }}</h1>
                <div class="mt-4 border-2 border-secondary shadow-lg">
                    <img class="w-72" src="/images/{{ $barang->gambar }}" alt="{{ $barang->nama_barang }}">
                </div>
            </div>

            <div class="bg-green-100 shadow-lg">

                    <div class="rounded overflow-hidden mb-10">
                <div class="mx-auto">
                    <h1 class="text-center text-xl font-bold">Details</h1>
                </div>          
                <div class="px-6 py-4">
                    <div class="font-medium text-xl mt-5 mb-1">
                        <p>{{ $barang->nama_barang }}</p>
                    </div>
                    <hr>
                    <div class="font-medium  mb-1">
                        <p>Harga : Rp. <span class="font-bold">{{ number_format($barang->harga) }}</span></p>
                    </div>
                    <div class="font-medium mb-1">
                        <p>Stock : {{ $barang->stok }}</p>
                    </div>
                    <div>
                        <p class="text-gray-700 text-base">
                        Keterangan : {{ $barang->keterangan }}
                        </p>
                    </div>
                    <hr>
                    <form action="/pesan/{{ $barang->id }}" method="post">
                        @csrf
                        <div class='bg-primary rounded m-9'>
                            <label class="px-2 font-bold" for="jumlah">Jumlah Pesan:</label>
                            <input class=" border-secondary w-3/5 rounded" type="number" id="jumlah" name="jumlah_pesan" required>
                        </div>
                        <center>
                            <button class="btn btn-secondary shadow-inner rounded text-center p-2 " type="submit">Masuk Cart <i class="fa-solid fa-cart-shopping"></i></button>
                        </center>
                    </form>
                </div>
            </div>


        </div>
    </div>


    
</x-app-layout>
