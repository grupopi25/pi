<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function mensagens(){
        return view('site.clientes.mensagens');
    }
}
