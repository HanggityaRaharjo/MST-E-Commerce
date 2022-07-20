<x-app-layout>
    <x-slot name="header">
        <!-- Kembali -->
        <a href="/history" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i>back</a>
        <!-- Breadcrumbs -->
        <div class="text-sm breadcrumbs border rounded bg-gray-100 mt-2 pl-2">
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house p-1"></i> Dashboard</a></li>  
                <li><a href="/history"> History</a></li>  
                <li>Detail Pesanan</li> 
            </ul>
        </div>

        <!-- Breadcrumbs -->
        <div class="text-sm border rounded bg-gray-100 mt-2 pl-2">
            <h1 class="text-3xl"> Success Check Out <i class="fa-solid fa-check"></i></h1>
            <p class="text-lg">Pesanan anda sudah sukses di check out selanjutnya untuk pembayaran silahkan transfer di rekening 
            <br>
            <strong> Bank BCA Nomer Rekening : 920-329-29323-3292 </strong>dengan nominal <strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></p>
        </div>
    </x-slot>

<!-- pembatas -->
    <div class="m-4 bg-primary ">
        <div class="judul text-3xl pl-16 py-2 ">
        <h1><i class="fa-solid fa-circle-info"></i> Detail Pesanan</h1>
        @if(!empty($pesanan))
        <p align="right" class="text-sm font-bold pr-4" >Tanggal Pesan: {{ $pesanan->tanggal }}</p>
        @endif
        
        </div>
        <div class="grid grid-cols-1 gap-1 ">
            <!-- tabel -->
            <div class="overflow-x-auto m-2">
                @if(!empty($pesanan))
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row  -->
                    <?php
                        $no = 1;
                    ?>
                    @foreach($pesanan_details as $pesanan_detail )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                        <td>{{ $pesanan_detail->barang->kategori->name }}</td>
                        <td>{{ $pesanan_detail->jumlah }} kain</td>
                        <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                        <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                    
                   @endforeach
                   <tr>
                        <td colspan="4" align="right"><span class="font-bold">Total Harga :</span></td>
                        <td><span class="font-bold"> Rp. {{ number_format($pesanan->jumlah_harga) }}</span></td>
                        <td colspan="1"></td>
                   </tr>
                   <tr>
                        <td colspan="4" align="right"><span class="font-bold">Kode Pesanan :</span></td>
                        <td><span class="font-bold">{{ number_format($pesanan->kode) }}</span></td>
                        <td colspan="1"></td>
                   </tr>
                    </tbody>
                </table>
                @endif

            </div>
            


        </div>
    </div>


    
</x-app-layout>
