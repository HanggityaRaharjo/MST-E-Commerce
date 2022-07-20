@extends('layouts.admin-dashboard')

@section('content')
<h1>User</h1>
<a href="/admin/create" class="btn btn-success"> Buat Data User +</a>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Tel</th>
                        <th scope="col">tanggal terdaftar</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
                                <!-- Alamat -->
                                <td>
                                    @if(!empty($user->alamat))
                                        {{ $user->alamat }}
                                    @endif
                                    @if(empty($user->alamat))
                                        Alamat Belum Dibuat
                                    @endif
                                </td>
                                <!-- Akhir Alamat -->
                                <!-- NO HP -->
                                <td>
                                    @if(!empty($user->nohp))
                                        {{ $user->nohp }}
                                    @endif
                                    @if(empty($user->nohp))
                                        No HP Belum Dibuat
                                    @endif
                                </td>
                                <!-- Akhir No HP -->
                                
                                <td>
                                {{ $user->created_at }}
                                </td>
                                <td>
                                    <a href="/admin/edit/{{$user->id}} " class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    
                                    <form action="/{{$user->id}}/user/delete"  method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir Table -->
@endsection
