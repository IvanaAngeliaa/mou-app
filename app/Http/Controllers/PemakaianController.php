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
        $data = Pemakaian::with("persediaan")->get();
        // $persediaan = Persediaan::all();
        
       // $persediaan = Persediaan::join('pemakaians', 'persediaans.id_pemakaians', '=', 'pemakaians.id')->get();
        return view('pemakaian.pemakaian', compact('data'));
    }

    public function pemakaian_tambah()
    {
        $data = Persediaan::all();
        return view('pemakaian.pemakaian_tambah', compact('data'));
    }

    public function pemakaian_simpan (Request $request)
    {
        $data = new Pemakaian();
        $data->id_persediaans = $request->id;
        $data->stock = $request->stock;
        $data->tanggal = $request->tanggal;
        $data->kadaluarsa = $request->kadaluarsa;
        $data->status = $request->status;
        
        if ($data->save()) {
            $persediaan = Persediaan::find($request->id);
            if ($request->status === 'masuk') {
                $persediaan->minimalstock += $request->stock;
            } elseif ($request->status === 'keluar') {
                $persediaan->minimalstock -= $request->stock;
            }
            $persediaan->save();
        }
        
        return redirect('persediaan')->with('success', 'Data berhasil disimpan');
    }
    
    public function pemakaian_edit($id)
    {
        $data = Pemakaian::find($id);
        return view('pemakaian.pemakaian_ubah', compact('data'));
    }

    public function pemakaian_update(Request $request, $id)
    {
        $data = Pemakaian::find($id);
        $persediaan = Persediaan::find($data->id_persediaans);

        // Adjust the stock if the status has changed
        if ($data->status !== $request->status) {
            if ($data->status === 'masuk') {
                $persediaan->minimalstock -= $data->stock;
            } elseif ($data->status === 'keluar') {
                $persediaan->minimalstock += $data->stock;
            }

            if ($request->status === 'masuk') {
                $persediaan->minimalstock += $request->stock;
            } elseif ($request->status === 'keluar') {
                $persediaan->minimalstock -= $request->stock;
            }
        } else {
            // Adjust the stock based on the difference
            if ($data->status === 'masuk') {
                $persediaan->minimalstock += ($request->stock - $data->stock);
            } elseif ($data->status === 'keluar') {
                $persediaan->minimalstock -= ($request->stock - $data->stock);
            }
        }

        $data->stock = $request->stock;
        $data->tanggal = $request->tanggal;
        $data->kadaluarsa = $request->kadaluarsa;
        $data->status = $request->status;
        
        if ($data->save()) {
            $persediaan->save();
        }
        
        return redirect('persediaan')->with('success', 'Data berhasil diubah');    
    }


    public function pemakaian_hapus($id)
    {
        $data = Pemakaian::find($id);
        $persediaan = Persediaan::find($data->id_persediaans);

        if ($data->status === 'masuk') {
            $persediaan->minimalstock -= $data->stock;
        } elseif ($data->status === 'keluar') {
            $persediaan->minimalstock += $data->stock;
        }

        $data->delete();
        $persediaan->save();

        return redirect('persediaan')->with('success', 'Data berhasil dihapus');
    }

}
