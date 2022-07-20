@extends('layouts.admin-dashboard')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-4">

    <h1 class="h3 mb-3 fw-normal text-center">Edit</h1>
  <form action="/{{ $user->id }}/update" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-floating">
        <label for="name">Name</label>
      <input type="text" name="name" method="post" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $user->name }}">
      @error('name')
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
        <label for="email">Email Address</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ $user->email }}">
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
        <label for="phone">Phone Number</label>
      <input type="tel" inputmode="numeric" name="nohp" class="form-control" id="phone" placeholder="Phone Number" value="{{ $user->nohp }}">
    </div>

    <div class="form-floating">
        <label for="alamat">Alamat</label>
        <input type="text" inputmode="numeric" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ $user->alamat }}">
    </div>






    <button class="w-100 btn btn-lg btn-success mt-1 mb-5" type="submit"><i class="bi bi-pencil"></i> Update</button>
    <div class="container mt-5 mb-5"></div>
    </form>

  </div>
</div>
@endsection