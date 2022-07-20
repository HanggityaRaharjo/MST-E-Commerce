<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kategori;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('admin.barang.index',compact('barangs'));
    }

    public function barangdestroy($id)
    {
        $barang = Barang::where('id',$id)->delete();
        Alert::success('Barang Telah dihapus', 'Hapus');
        return redirect("/barang");
    }

    public function store(Request $request)
    {

        $data = Barang::create([
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori,
            'gambar' => $request->gambar,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan
             
        ]);
        Alert::success('Produk berhasil ditambah', 'success');
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::where('id',$id)->first();
        return view('admin.barang.edit', compact(['barang']));
    }

}
