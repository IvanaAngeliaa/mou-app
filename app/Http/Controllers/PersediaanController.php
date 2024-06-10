<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersediaanController extends Controller
{
    public function persediaan_index()
    {
        return view('persediaan');
    }
}
