<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

   public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();




        return redirect()->intended('home')->with('success', 'Seja Bem-Vindo!');
    }
    if (Auth::guard('adm')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('adm.dashboard')->with('success', 'Seja Bem-Vindo, Administrador!');
    }

    return back()->withInput()->with('error', 'Usuário não Encontrado no banco de dados!');
}

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            return redirect()->route('welcome')->with('success', 'Você saiu com sucesso!');
        } else {
            return redirect()->route('welcome')->with('error', 'Você não está logado.');
        }
    }
}
