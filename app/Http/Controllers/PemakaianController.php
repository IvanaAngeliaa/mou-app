<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Pemakaian;

class PemakaianController extends Controller
{
    
    public function pakai_tambah()
    {
        return view('pemakaian.pemakaian_tambah');
    }

   
}
