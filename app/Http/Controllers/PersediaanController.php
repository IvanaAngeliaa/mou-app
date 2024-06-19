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
        $pemakaian = Pemakaian::all();
        return view('persediaan.persediaan', compact('persediaan','pemakaian'));
    }

    public function persediaan_tambah()
    {
        $data = Kategori::all();
        
        // dd($data);
        return view('persediaan.persediaan_tambah', compact('data'));
    }

    public function persediaan_simpan(Request $request)
    {
        $data = new Persediaan();
        $data->kategori_id = $request->kategori;
        $data->namabarang = $request->namabarang;
        $data->minimalstock = $request->minimalstock;
        $data->satuan = $request->satuan;
        $data->save();
        
        return redirect('persediaan')->with('success', 'Data berhasil disimpan');
    }
}
