<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Mou_User;

class MouUserController extends Controller
{
    public function user_index()
    {
        $data = Mou_User::all();
        return view('user.user', compact('data'));
    }

    public function user_tambah()
    {
        return view('user.user_tambah');
    }

    public function user_simpan(Request $request)
    {
        $customMessage = [
            'username.required' => 'Username tidak boleh kosong',
            'fullname.required' => 'Nama Lengkap tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ];

        $this->validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'password' => 'required',
        ], $customMessage);

        $data = new Mou_User();
        $data->username = $request->username;
        $data->fullname = $request->fullname;
        $data->password = Hash::make($request->password);
        if($request->profil)
        {
            $photo = $request->file('profil');
            $filename = date('Y-m-d').'-'.uniqid().'.'.$photo->getClientOriginalExtension();
            $path = 'user/'.$filename;

            Storage::disk('public')->put($path, file_get_contents($photo));
            $data->profil = $filename;
            $data->save();
        }
        $data->save();
        return redirect('user')->with('success', 'Data berhasil disimpan');
    }

    public function user_edit($id)
    {
        $data = Mou_User::find($id);
        return view('user.user_ubah', compact('data'));
    }

    public function user_update(Request $request, $id)
    {
        $data = Mou_User::find($id);
        if($request->username)
        {
            $data->username = $request->username;
            $data->save();
        }
        if($request->fullname)
        {
            $data->fullname = $request->fullname;
            $data->save();
        }
        if($request->password)
        {
            $data->password = Hash::make($request->password);
            $data->save();
        }
        if($request->profil)
        {
            $filename = $data->profil;
            File::delete(public_path('/storage/user/'. $filename));

            $photo = $request->file('profil');
            $filename = date('Y-m-d').'-'.uniqid().'.'.$photo->getClientOriginalExtension();
            $path = 'user/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($photo));
            $data->profil = $filename;
            $data->save();
        }
        return redirect('user')->with('success', 'Data berhasil diubah');   
    }

    public function user_hapus($id)
    {
        $data = Mou_User::find($id);
        $filename = $data->profil;
        File::delete(public_path('/storage/user/'. $filename));
        $data->delete();
        return redirect('user')->with('success', 'Data berhasil dihapus');
    }
}
