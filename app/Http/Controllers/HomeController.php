<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Consulta;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function home(){
        $meuPet = Pet::where('user_id',Auth::id())->count();
    return view('site.clientes.dashboard-clente',compact('meuPet'));
}
public function sobre(){
    return view('site.clientes.sobrenos');
}
public function dashboard(){
      $meuPet = Pet::where('user_id',Auth::id())->count();
    return view('site.clientes.dashboard-clente',compact('meuPet'));

}
public function consulta(){
    return view ('site.clientes.consultas');
}

public function logout(){
   if(Auth::check()) {
        Auth::logout();
        return redirect()->route('welcome')->with('success', 'Você saiu com sucesso!');
    } else {
        return redirect()->route('welcome')->with('error', 'Você não está logado.');
    }
}
}
