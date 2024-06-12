<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersediaanController extends Controller
{
    public function persediaan_index()
    {
        return view('persediaan.persediaan');
    }

    public function persediaan_tambah()
    {
        return view('persediaan.persediaan_tambah');
    }

    public function persediaan_simpan(Request $request)
    {
        $data = new Persediaan();
        $data->nama_persediaan = $request->namabarang;
        $data->minimal_stock = $request->minimalstock;
        $data->save();
        if($request->satuan)
        {
            $data->satuan = $request->satuan;
            $data->save();
        }
        return redirect('persediaan')->with('success', 'Data berhasil disimpan');
    }
}
