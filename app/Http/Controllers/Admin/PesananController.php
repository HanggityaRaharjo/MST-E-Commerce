<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function show()
    {

        $pesanans = Pesanan::all();
        return view('admin.pesanan.index',compact('pesanans'));

    }


}
