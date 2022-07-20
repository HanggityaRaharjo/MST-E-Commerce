<x-app-layout>
    <x-slot name="header">
        <!-- header -->
        <!-- Input Search -->
        <div class="form-control ">
            <div class="input-group place-content-end">
                <input type="text" placeholder="Search…" class="input input-bordered" />
                <button class="btn btn-square" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
            </div>
        </div>
        <!-- akhir input search -->
        <!-- Breadcrumbs -->
        <div class="text-sm breadcrumbs border rounded bg-slate-200 mt-2 mb-10 pl-2">
            <ul>
                <li>Dashboard</li>  
            </ul>
        </div>
        <!-- Akhir Breadcumbs -->

        <div class="grid gap-4 lg:grid-cols-2 md:grid-cols-1">
                <!-- header sebelah kiri -->
                <div class="mr-20">
                    <div class="head-kategori mb-5">
                        <h1 class="text-3xl font-bold">Kategori :</h1>
                    </div>
                    <div class="body-kategori">
                        <a href="/kategoris/baju" class="text-xl" >
                            <div class="kategori-item pl-10 mb-5 hover:bg-secondary hover:border rounded ">                             
                                Baju
                                
                            </div>
                        </a>

                        <a href="/kategoris/celana" class="text-xl" >
                            <div class="kategori-item pl-10 mb-5 hover:bg-secondary hover:border rounded ">                          
                                celana
                                
                            </div>
                        </a>

                        <a href="/kategoris/jaket" class="text-xl" >
                            <div class="kategori-item pl-10 mb-5 hover:bg-secondary hover:border rounded ">                            
                                jaket
                                
                            </div>
                        </a>

                        <a href="/kategoris/sepatu" class="text-xl" >
                            <div class="kategori-item pl-10 mb-5 hover:bg-secondary hover:border rounded ">                            
                                sepatu
                                
                            </div>
                        </a>

                        
                        
                    </div>            
                            

                </div>
                <!-- Akhir header sebalh kiri -->
                <!-- header sebelah kanan -->
                <div class="bg-cyan-500 m-auto border border-slate-300 rounded shadow-2xl">
                    <!-- gambar hero -->
                    <div class="slides">
                        <div class="slide">
                            <img src="img/gambar1.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/gambar2.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/gambar3.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/gambar4.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/gambar5.jpg" alt="">
                        </div>
                        <div class="navigation">
                            <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
                            <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
                        </div>
                    </div>

                    <!-- akhir hero -->
                    

                </div>
        </div>
    </x-slot>
    <!-- Produk -->
    <div class=" height drop-shadow-xl">
        <h1 class=" text-3xl text-center text-gray-800 mt-10"> Store <i class="fa-solid fa-store"></i> </h1>
    </div>

    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @foreach($barangs as $barang)
        <!--Card Product-->
        <div class="">
        <a href="/pesan/{{$barang->id}}">
            <div class="card w-72 bg-base-100 shadow-xl mx-auto hover:bg-primary">
                <figure><img src="images/{{ $barang->gambar }} " alt="Shoes" /></figure>
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
<!-- pembatas -->



    
</x-app-layout>
