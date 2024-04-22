<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Users;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller


// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id



// Auth Controller for Login and Register

{
    public function login() // Page Login
    {
        return view('Auth/login');
    }

    public function register()  // Page Register
    {
        return view('Auth/register');
    }


    public function authenticate(Request $request) //Auth Login
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The account credentials do not match our records.',
        ]);
    }


    public function store(Request $request){ //Register Function

            $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
            'hp' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'bank' => 'required',
            'no_rekening' => 'required',
        ]);

        $data = $request->except('confirm-password', 'password',);
        $data['password'] = Hash::make($request->password);

        Users::create($data);

        return redirect('login');
    }

}
