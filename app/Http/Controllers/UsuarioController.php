<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function perfil()
    {
        return view('usuario.perfil');
    }

    public function actualizar(Request $request)
    {
        $user = Auth::user();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('usuario.perfil')->with('success', 'Perfil actualizado con éxito!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('usuario/perfil');
        }

        return back()->withErrors(['email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
