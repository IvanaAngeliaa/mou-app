<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function produk_index()
    {
        $data = Produk::all();
        return view('produk.produk', compact('data'));
    }
    
    public function produk_tambah()
    {
        return view('produk.produk_tambah');
    }

    public function produk_simpan(Request $request)
    {
        // dd($request->all());
        $customMessage = [
            'namaproduk.required' => 'Nama Produk tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
        ];

        $this->validate($request, [
            'namaproduk' => 'required',
            'harga' => 'required',
        ], $customMessage);

        $data = new Produk();
        $data->namaproduk = $request->namaproduk;
        $data->harga = $request->harga;
        $data->save();
        if($request->deskripsi)
        {
            $data->deskripsi = $request->deskripsi;
            $data->save();
        }
        if($request->foto)
        {
            $foto = $request->file('foto');
            $filename = date('Y-m-d').'-'.uniqid().'.'.$foto->getClientOriginalExtension();
            $path = 'produk/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($foto));
            $data->foto = $filename;
            $data->save();
        }
        return redirect('produk')->with('success', 'Data berhasil disimpan');
    }
    public function produk_edit($id)
    {
        $data = Produk::find($id);
        return view('produk.produk_ubah', compact('data'));
    }

    public function produk_update(Request $request, $id)
    {
        $data = Produk::find($id);
        if($request->namaproduk)
        {
            $data->namaproduk = $request->namaproduk;
            $data->save();
        }
        if($request->harga)
        {
            $data->harga = $request->harga;
            $data->save();
        }
        if($request->deskripsi)
        {
            $data->deskripsi = $request->deskripsi;
            $data->save();
        }
        if($request->foto)
        {
            $filename = $data->foto;
            File::delete(public_path('/storage/produk/'. $filename));

            $foto = $request->file('foto');
            $filename = date('Y-m-d').'-'.uniqid().'.'.$foto->getClientOriginalExtension();
            $path = 'produk/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($foto));
            $data->foto = $filename;
            $data->save();
        }
        return redirect('produk')->with('success', 'Data berhasil diubah');   
    }

    public function produk_hapus($id)
    {
        $data = Produk::find($id);
        $filename = $data->foto;
        File::delete(public_path('/storage/produk/'. $filename));
        $data->delete();
        return redirect('produk')->with('success', 'Data berhasil dihapus');
    }
    
}
