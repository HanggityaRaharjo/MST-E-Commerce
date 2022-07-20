<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi Update
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['confirmed'],
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->update();
        Alert::success('Update Success', 'Data Berhasil Di Update');
        return redirect('/profile');
    }
}
