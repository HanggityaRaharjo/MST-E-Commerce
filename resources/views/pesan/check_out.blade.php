<x-app-layout>
    <x-slot name="header">
        <!-- Kembali -->
        <a href="/dashboard" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i>back</a>
        <!-- Breadcrumbs -->
        <div class="text-sm breadcrumbs border rounded bg-gray-100 mt-1 pl-2">
            <ul>
                <li><a href="/dashboard"><i class="fa-solid fa-house p-1"></i> Dashboard</a></li>  
                <li>Check out</li> 
            </ul>
        </div>
    </x-slot>

<!-- pembatas -->
    <div class="m-4 bg-primary ">
        <div class="judul text-3xl pl-16 py-2 ">
        <h1><i class="fa-solid fa-cart-shopping"></i> check Out</h1>
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
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
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
                        <td align="left">
                             <img src="images/{{ $pesanan_detail->barang->gambar }}" width="100" alt="...">
                        </td>
                        <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                        <td>{{ $pesanan_detail->jumlah }} kain</td>
                        <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                        <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                        <td>
                            <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit">
                                    <div class="badge badge-error gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-4 h-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        Hapus
                                    </div>
                                    </button>
                            </form>
                        </td>
                    </tr>
                   @endforeach
                   <tr>
                        <td colspan="5" align="right"><span class="font-bold">Total Harga :</span></td>
                        <td><span class="font-bold"> Rp. {{ number_format($pesanan->jumlah_harga) }}</span></td>
                        <td> 
                            @if(!empty($pesanan_detail))
                            <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i> Check Out</a>
                            @endif
                        </td>
                   </tr>
                    </tbody>
                </table>
                @endif
            </div>
            


        </div>
    </div>


    
</x-app-layout>
