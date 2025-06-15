<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function mensagens(){
        Mensagem::where('cliente_id', Auth::id())
        ->where('remetente', 'adm')
        ->where('lida', false)
        ->update(['lida' => true]);
        return view('site.clientes.mensagens');
    }

}
