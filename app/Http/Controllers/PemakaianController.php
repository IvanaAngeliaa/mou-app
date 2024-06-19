<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use App\Models\Pemakaian;
use App\Models\Persediaan;

class PemakaianController extends Controller
{
    public function pemakaian_index()
    {
        $data = Pemakaian::all();
        return view('pemakaian.pemakaian', compact('data'));
    }

    public function pemakaian_tambah()
    {
        $data = Persediaan::all();
        return view('pemakaian.pemakaian_tambah', compact('data'));
    }

    public function pemakaian_simpan (Request $request)
    {
        $request->all();
        $data = new Pemakaian();
        $data->id_persediaans = $request->id;
        $data->stock = $request->stock;
        $data->tanggal = $request->tanggal;
        $data->kadaluarsa = $request->kadaluarsa;
        $data->status = $request->status;
        $data->save();
        
        return redirect('pemakaian')->with('success', 'Data berhasil disimpan');
    }
    
    public function pemakaian_edit($id)
    {
        $data = Pemakaian::find($id);
        return view('pemakaian.pemakaian_ubah', compact('data'));
    }

    public function pemakaian_update(Request $request, $id)
    {
        $data = Pemakaian::find($id);
        if($request->stock)
        {
            $data->stock = $request->stock;
            $data->save();
        }
        if($request->tanggal)
        {
            $data->tanggal = $request->tanggal;
            $data->save();
        }
        if($request->kadaluarsa)
        {
            $data->kadaluarsa = $request->kadaluarsa;
            $data->save();
        }
        if($request->status)
        {
            $data->status = $request->status;
            $data->save();
        }
        return redirect('pemakaian')->with('success', 'Data berhasil diubah');   
    }

    public function pemakaian_hapus($id)
    {
        $data = Pemakaian::find($id);
        $filename = $data->profil;
        File::delete(public_path('/storage/pemakaian/'. $filename));
        $data->delete();
        return redirect('pemakaian')->with('success', 'Data berhasil dihapus');
    }
}
