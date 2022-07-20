@extends('layouts.admin-dashboard')

@section('content')
<h1>Barang</h1>
    <a href="/barang/create" class="btn btn-success">Tambah Produk</a>
    <div>
        <table class="table table-dark table-striped mt-2">
        <thead>
            <?php
            $no = 1;
            ?>
            <tr>
            <th scope="col">#</th>
           
            <th scope="col">Kategori</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Gambar</th>
            <th scope="col">harga</th>
            <th scope="col">stok</th>
            <th scope="col">keterangan</th>
            <th scope="col">tanggal di buat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
            <th scope="row">{{ $no++ }}</th>
          
            <td>{{ $barang->kategori->name }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->gambar }}</td>
            <td>{{ $barang->harga}}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->keterangan }}</td>
            <td>{{ $barang->created_at }}</td>
            <td>
                <a href="/barang/edit/{{ $barang->id }}" class="btn btn-success">Edit</a>
                <form action="/{{$barang->id}}/barang/delete"  method="post">
                @csrf
                {{ method_field('delete') }}
                <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       
    </div>
    <!-- Pagination -->

@endsection