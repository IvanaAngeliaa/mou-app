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
        $datapemakaian = Pemakaian::all();
        return view('persediaan.persediaan', compact('datapemakaian'));
    }

    public function pemakaian_tambah()
    {
        $datapemakaian = Persediaan::all();
        return view('pemakaian.pemakaian_tambah', compact('datapemakaian'));
    }

    public function pemakaian_simpan (Request $request)
    {
        $request->all();
        $datapemakaian = new Pemakaian();
        $datapemakaian->id_persediaans = $request->id;
        $datapemakaian->stock = $request->stock;
        $datapemakaian->tanggal = $request->tanggal;
        $datapemakaian->kadaluarsa = $request->kadaluarsa;
        $datapemakaian->status = $request->status;
        $datapemakaian->save();
        
        return redirect('pemakaian')->with('success', 'Data berhasil disimpan');
    }
    
}
