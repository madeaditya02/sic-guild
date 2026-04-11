<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            "username" => ["required", "string"],
            "password" => ["required", "string"]
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withInput($request->only('username'))->withErrors([
            'username' => 'Username atau password salah!'
        ]);
    }
    
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validate = $request->validate([ 
            'name' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:25', 'unique:users,username'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        User::create([
            "name" => $validate['name'],
            "username" => $validate['username'],
            "password" => Hash::make($validate['password'])
        ]);

        return redirect('/login');
    }
    
    public function profile()
    {
        return view('auth.profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
