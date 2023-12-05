<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'contrasena');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->route('login')->with('error', 'Correo o contraseña incorrectos.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
