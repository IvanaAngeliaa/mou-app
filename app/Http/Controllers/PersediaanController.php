<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Persediaan;
use App\Models\Pemakaian;

class PersediaanController extends Controller
{
    public function persediaan_index()
    {
        $persediaan = Persediaan::all();
        $pemakaian = Pemakaian::with("persediaan")->get();
        //$pemakaian = Pemakaian::join('persediaans', 'pemakaians.id_persediaan', '=', 'persediaans.id')->get();
        return view('persediaan.persediaan', compact('persediaan','pemakaian'));
    }

    public function persediaan_tambah()
    {
        $data = Kategori::all();
        $pemakaian = Pemakaian::all();
        // dd($data);
        return view('persediaan.persediaan_tambah', compact('data','pemakaian'));
    }

    public function persediaan_simpan(Request $request)
    {
        $pemakaian = Pemakaian::all();
        $data = new Persediaan();
        $data->kategori_id = $request->kategori;
        $data->namabarang = $request->namabarang;
        $data->minimalstock = $request->minimalstock;
        $data->satuan = $request->satuan;
        $data->save();
        
        return redirect('persediaan')->with('success', 'Data berhasil disimpan');
    }

    
}
