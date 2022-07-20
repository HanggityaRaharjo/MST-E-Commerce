@extends('layouts.admin-dashboard')

@section('content')
<a href="/admin" class="btn btn-danger"><i class="bi bi-backspace"></i> Back</a>
<div class="row justify-content-center">
  <div class="col-lg-4">
  <main class="form-register">
    <h1 class="h3 mb-2 fw-normal text-center">Add New Data</h1>
  <form action="/admin" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-floating">
        <label for="name">Name</label>
      <input type="text" name="name" method="post" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
        <label for="email">Email Address</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" >
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
        <label for="floatingPassword">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="form-floating">
        <label for="phone">Phone Number</label>
      <input type="tel" inputmode="numeric" name="nohp" class="form-control" id="phone" placeholder="Phone Number">
    </div>

    <div class="form-floating">
        <label for="phone">Alamat</label>
      <input type="tel" inputmode="numeric" name="alamat" class="form-control" id="phone" placeholder="Phone Number">
    </div>

    <button class="w-100 btn btn-lg btn-success mt-2 mb-5" type="submit"><i class="bi bi-file-plus"></i>Add Data</button>
    <div class="container mt-5 mb-5"></div>
 
    </form>
</main>
  </div>
</div>


@endsection