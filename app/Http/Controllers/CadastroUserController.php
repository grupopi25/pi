<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Cliente; 
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroUserController extends Controller
{
    public function index(){
        return view('user.CadastroUser');
    }

    public function store(Request $request){
        try {
           
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
                'telefone' => $request->telefone,
            ]);

            
            $cliente = Cliente::create([
                'nome' => $request->name,
                'email' => $request->email,
                'telefone' => $request->telefone,
            ]);

            
            $user->cliente_id = $cliente->id;
            $user->save();

            return redirect()->route('login')->with('success', 'Usuário Cadastrado Com Sucesso!');
        } catch(Exception $e) {
            return back()->withInput()->with('error', 'Usuário não Cadastrado!');
        }
    }
}
