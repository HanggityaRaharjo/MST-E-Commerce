@extends('layouts.admin-dashboard')

@section('content')
<h1>Pesanan</h1>
    <div>
        <table class="table table-dark table-striped mt-2">
        <thead>
            <?php
            $no = 1;
            ?>
            <tr>
            <th scope="col">#</th>
            <th scope="col">User Id</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Kode Pesanan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">tanggal di buat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanans as $pesanan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pesanan->user_id }}</td>
                <td>{{ $pesanan->tanggal }}</td>
                <!-- Jika status 0 = Masuk Keranjang-->
                <!-- Jika status 1 = belum dibayar-->
                <td>
                    @if($pesanan->status == 0)
                    Masuk Keranjang
                    @endif

                    @if( $pesanan->status == 1 )
                    Belum Dibayar
                    @endif
                </td>
                <td>{{ $pesanan->kode }}</td>
                <td>{{ $pesanan->jumlah_harga }}</td>
                <td>{{ $pesanan->created_at }}</td>
                <td>
                    edit | hapus
                </td>
            </tr>
            @endforeach
                
        </tbody>
        </table>
    </div>
@endsection