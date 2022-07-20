<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.user.alluser',compact('users'));
    }

    public function userdestroy($id)
    {
        $user = User::where('id',$id)->delete();
        Alert::success('User Telah dihapus', 'Hapus');
        return redirect("/admin/alluser");
    }
    

    public function Update(Request $request, $id){
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);


        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;

        $user->save();
        return redirect('/admin/alluser');
    }


    public function store(Request $request)
    {
      $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);



        $data = User::create([
            'role' => 'user',
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'nohp' => $request->nohp,
            'date' => $request->date,
            'alamat' => $request->alamat
             
        ]);
        Alert::success('Data berhasil ditambah', 'success');
        return redirect('/admin/alluser');
    }


}
