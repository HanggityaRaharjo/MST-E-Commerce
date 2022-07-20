<x-app-layout>
    <x-slot name="header">
        <!-- Kembali -->
        <a href="/dashboard" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i>back</a>
        <!-- Breadcrumbs -->
        <div class="text-sm breadcrumbs border rounded bg-gray-100 mt-1 pl-2">
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house p-1"></i> Dashboard</a></li>  
                <li>History</li> 
            </ul>
        </div>
    </x-slot>

<!-- pembatas -->
    <div class="m-4 bg-primary ">
        <div class="judul text-3xl pl-16 py-2 ">
            <h1><i class="fa-solid fa-history"></i> Riwayat Pesanan</h1>         
        </div>

        <div class="grid grid-cols-1 gap-1 ">
            <!-- tabel -->
            <div class="overflow-x-auto m-2">
                
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Jumlah Harga</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row  -->
                    <?php
                        $no = 1;
                    ?>
                   
                   @foreach($pesanans as $pesanan)    
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pesanan->tanggal }}</td>
                        <td>
                            @if($pesanan->status == 1)
                            Belum Dibayar
                            @else
                            Sudah Dibayar
                            @endif
                        </td>
                        <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                        <td>
                            <a href="/history/{{ $pesanan->id }}" class="btn btn-secondary">Detail <i class="fa-solid fa-circle-info pl-1"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
            


        </div>
    </div>


    
</x-app-layout>
