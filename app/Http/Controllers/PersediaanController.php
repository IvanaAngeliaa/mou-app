<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Persediaan;

class PersediaanController extends Controller
{
    public function persediaan_index()
    {
        $datapersediaan = Persediaan::all();
        return view('persediaan.persediaan', compact('datapersediaan'));
    }

    public function persediaan_tambah()
    {
        $datapersediaan = Kategori::all();
        
        // dd($data);
        return view('persediaan.persediaan_tambah', compact('datapersediaan'));
    }

    public function persediaan_simpan(Request $request)
    {
        $datapersediaan = new Persediaan();
        $datapersediaan->kategori_id = $request->kategori;
        $datapersediaan->namabarang = $request->namabarang;
        $datapersediaan->minimalstock = $request->minimalstock;
        $datapersediaan->satuan = $request->satuan;
        $datapersediaan->save();
        
        return redirect('persediaan')->with('success', 'Data berhasil disimpan');
    }
}
