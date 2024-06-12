<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Pemakaian;

class PemakaianController extends Controller
{
    public function pemakaian_index()
    {
        $data = Pemakaian::all();
        return view('pemakaian.pemakaian', compact('data'));
    }

    public function pemakaian_tambah()
    {
        return view('pemakaian.pemakaian_tambah');
    }

    public function pemakaian_simpan()
    {
        return view('pemakaian.pemakaian_simpan');
    }
}
