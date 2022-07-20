<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(6);
        return view('admin.index',compact('barangs'));
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.edit', compact(['user']));
    }

    public function createuser()
    {
        return view('admin.user.create');
    }

    
    public function createproduct()
    {
        return view('admin.barang.create');
    }

}
