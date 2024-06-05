<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        $customMessage = [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ];

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ], $customMessage);

        // Retrieve user from the custom table
        $user = Mou_User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Log the user in by setting session variables
            Session::put('user_id', $user->id);
            Session::put('username', $user->username);
            Session::put('logged_in', true);

            // Redirect to the dashboard
            return redirect('/dashboard');
        }

        // Authentication failed
        return redirect('/lgn')->with('alert', 'Username atau Password salah');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/lgn');
    }
}
