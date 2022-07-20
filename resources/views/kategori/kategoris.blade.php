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
                    <li>Kategori</li>  
                </ul>
            </div>
        <!-- Akhir Breadcumbs -->
        
        
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 gap-5">
            @foreach($kategoris as $kategori)
            <!--Card Product-->
            <div class=""> 
                <div class="card w-72 bg-base-100 shadow-xl mx-auto">
                    <a href="/kategori/{{ $kategori->id }}" class="hover:bg-green-400">
                        <div class="card-body">
                                <h2 class="card-title">{{ $kategori->name }}</h2>
                        </div>
                    </a>
                </div>
        
            </div>
            @endforeach
        </div>
        
    </x-slot>
   
 




    
</x-app-layout>
