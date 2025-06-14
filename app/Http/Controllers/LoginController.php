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
        }elseif(($credentials['email'] == 'admin@eduardo.com' && $credentials['password'] == '123') ||
               ($credentials['email'] == 'admin@anderson.com' && $credentials['password'] == '123') ||
               ($credentials['email'] == 'admin@tarcisio.com' && $credentials['password'] == '123'))   {
            return redirect()->route('adm.dashboard');
        }
        return back()->withInput()->with('error', 'Usuário não Encontrado no banco de dados!');

    }

    public function logout() {}
}
