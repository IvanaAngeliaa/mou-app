<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mendapatkan user yang sedang login
        //$user = Auth::Mou_User();
        
        // Mengirim data user ke view
        //return view('dashboard', ['Mou_User' => $user]);
    }
}

