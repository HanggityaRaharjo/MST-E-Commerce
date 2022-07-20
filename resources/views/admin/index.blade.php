@extends('layouts.admin-dashboard')

@section('content')
    <!--  Kartu -->
    <h1>Product hari ini</h1>
    <div class="row">
        <!-- card 1 -->
        <div class="col-sm-3">
            <a href="#" style="text-decoration:none; color:green;">
                <div class="card" style="background-image: url('images/baju.jpg'); background-size: cover; background-position: center;">
                        <div class="card-body">
                            <h4 class="btn btn-success">BAJU</h4>
                        </div>
                </div>
            </a>
        </div>
        <!-- akhir card 1 -->
        <!-- card 1 -->
        <div class="col-sm-3 ">
            <a href="#" style="text-decoration:none; color:green;">
                <div class="card h-100" style="background-image: url('images/celana.jpg'); background-size: cover; background-position: center;">
                        <div class="card-body">
                            <h4 class="btn btn-success">CELANA</h4>
                        </div>
                </div>
            </a>
        </div>
        <!-- akhir card 1 -->
        <!-- card 1 -->
        <div class="col-sm-3 ">
            <a href="#" style="text-decoration:none; color:green;">
                <div class="card h-100" style="background-image: url('images/jaket.jpg'); background-size: cover; background-position: center;">
                        <div class="card-body">
                            <h4 class="btn btn-success">JAKET</h4>
                        </div>
                </div>
            </a>
        </div>
        <!-- akhir card 1 -->
        <!-- card 1 -->
        <div class="col-sm-3 ">
            <a href="#" style="text-decoration:none; color:green;">
                <div class="card h-100" style="background-image: url('images/sepatu.jpg'); background-size: cover; background-position: center;">
                        <div class="card-body">
                            <h4 class="btn btn-success">SEPATU</h4>
                        </div>
                </div>
            </a>
        </div>
        <!-- akhir card 1 -->

        
                     
    </div>
    <!-- Akhir Kartu -->
    <h1 class="mt-4">Product di jual</h1>
    <!-- Table -->
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <?php 
                            $no = 1;
                        ?>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $barang)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->gambar }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>{{ $barang->keterangan }}</td>
                            <td>edit</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir Table -->

@endsection
