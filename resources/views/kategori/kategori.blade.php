<x-app-layout>
    <x-slot name="header">
        <!-- header -->
        <!-- input search -->
        <div class="form-control">
                <div class="input-group place-content-end">
                    <input type="text" placeholder="Search…" class="input input-bordered" />
                    <button class="btn btn-square" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                </div>
            </div>
        <!-- akhir input search -->
        <!-- Breadcrumbs -->
            <div class="text-sm breadcrumbs border rounded bg-slate-200 mt-2 pl-2">
                <ul>
                    <li>Barang Kategori :  {{ $kategori }}</li>  
                </ul>
            </div>
        <!-- Akhir Breadcumbs -->
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @foreach($barangs as $barang)
        <!--Card Product-->
        <div class="">
        {{ $barang->gambar }}
        <a href="/pesan/{{$barang->id}}">
            <div class="card w-72 bg-base-100 shadow-xl mx-auto hover:bg-primary">
                <figure><img src="{{asset('images/$barang->gambar')}} " alt="error" /></figure>
                <div class="card-body">
                        <h2 class="card-title">{{ $barang->nama_barang }}</h2>
                        <p>Harga : <span class="font-bold">Rp. {{ number_format($barang->harga) }}</span></p>                    
                        <p>Stock : {{ number_format($barang->stok) }}</p>
                        <p>Keterangan : {{ $barang->keterangan }}</p>
                    <div class="card-actions justify-end">
                    <a href="/pesan/{{$barang->id}}" class="btn btn-secondary">Order Now!</a>
                    </div>
                </div>
            </div>
        </a>
        </div>
        @endforeach
    </div>
    </x-slot>
   
 




    
</x-app-layout>
