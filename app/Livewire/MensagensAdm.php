<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Mensagem;
use Illuminate\Support\Facades\Auth;

class MensagensAdm extends Component
{
    public $clientes;
    public $cliente_id;
    public $mensagem;
    public $mensagens = [];

    public function mount()
    {
        $this->clientes = Cliente::all();

        // Recuperar cliente selecionado da sessão, se existir
        $this->cliente_id = session('cliente_id');
        if ($this->cliente_id) {
            $this->carregarMensagens();
        }
    }

    public function updatedClienteId()
    {
        // Salvar cliente selecionado na sessão
        session(['cliente_id' => $this->cliente_id]);
        $this->carregarMensagens();
    }

    public function carregarMensagens()
    {
        if ($this->cliente_id) {
            $this->mensagens = Mensagem::where('cliente_id', $this->cliente_id)
                ->orderBy('created_at', 'asc')
                ->get();
        } else {
            $this->mensagens = [];
        }
    }

    public function enviarMensagem()
    {
        $this->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mensagem' => 'required|string|max:1000',
        ]);

        $adm = Auth::guard('adm')->user();

        if (!$adm) {
            session()->flash('error', 'Você precisa estar logado como administrador para enviar mensagens.');
            return;
        }

        Mensagem::create([
            'cliente_id' => $this->cliente_id,
            'adm_id'     => $adm->id,
            'conteudo'   => $this->mensagem,
            'remetente'  => 'adm',
        ]);

        $this->mensagem = null;

        $this->carregarMensagens();

        session()->flash('success', 'Mensagem enviada com sucesso!');
    }

    public function render()
    {
        return view('livewire.mensagens-adm');
    }
}
