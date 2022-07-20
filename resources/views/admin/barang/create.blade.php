@extends('layouts.admin-dashboard')

@section('content')
<a href="/barang" class="btn btn-danger"><i class="bi bi-backspace"></i> Back</a>
<div class="row justify-content-center">
  <div class="col-lg-4">
  <main class="form-register">
    <h1 class="h3 mb-2 fw-normal text-center">Add Product</h1>
        <form action="/barang/add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" method="post" class="form-control rounded-top @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Nama Barang" >
            @error('nama_barang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>


            <div class="form-floating">
                <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Rp.100.000" >
            @error('harga')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-floating">
                <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="1" >
            @error('stok')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
 
            <div class="form-floating">
                <label for="kategori">kategori</label>
            <input type="number" name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="1" >
            @error('kategori')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-floating">
                <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Keterangan" >
            @error('keterangan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
            <!-- image Upload -->
            <div class="image-upload">
                <label for="image">Select image with size 500px X 500px <small><i>Maximum File 1 Mb</i></small></label>
                <input type="file" id="file" name="gambar" class="form-control">
            </div>
            <!-- end image upload -->
            <button class="w-100 btn btn-lg btn-warning mt-2 mb-5" type="submit"><i class="bi bi-file-plus"></i>Add Data</button>
            <div class="container mt-5 mb-5"></div>
    
        </form>
</main>
  </div>
</div>


@endsection