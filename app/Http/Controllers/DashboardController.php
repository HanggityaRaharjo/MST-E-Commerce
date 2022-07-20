<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('dashboard',compact('barangs'));
    }
    public function kategoris(Kategori $kategori)
    {   
        $title = $kategori->name;
        $barangs = $kategori->barangs;
        $kategori = $kategori->name;
        
        return view('kategori.kategori',compact('title','barangs','kategori'));
    }

    // public function kategori($id)
    // {
    //     $kategoris = Kategori::where('id',$id)->all();
       
    //     return view('kategori.kategori',compact('kategoris'));
    // }
}
