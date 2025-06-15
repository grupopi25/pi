<?php

namespace App\Livewire;

use App\Models\Mensagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MessageLivewire extends Component
{
    public $mensagens = [];
    public $novaMensagem;

    public $mensagemSelecionadaId = null; // id da mensagem do adm selecionada para responder
    public $respostaMensagem = ''; // campo para a resposta

    public function mount()
    {
        $clienteId = Auth::id();

        if (!$clienteId) {
            abort(403, 'Cliente não autenticado.');
        }

        $this->carregarMensagens($clienteId);
    }

    public function enviarMensagemCliente()
    {
        $this->validate([
            'novaMensagem' => 'required|string|max:1000',
        ]);

        $clienteId = Auth::id();

        if (!$clienteId) {
            session()->flash('error', 'Você precisa estar logado para enviar mensagens.');
            return;
        }

        Mensagem::create([
            'cliente_id' => $clienteId,
            'adm_id'     => null,
            'conteudo'   => $this->novaMensagem,
            'remetente'  => 'cliente',
        ]);

        $this->novaMensagem = '';

        $this->carregarMensagens($clienteId);
    }

    public function selecionarMensagem($id)
    {
        $this->mensagemSelecionadaId = $id;
        $this->respostaMensagem = '';
    }

    public function enviarResposta()
    {
        $this->validate([
            'respostaMensagem' => 'required|string|max:1000',
        ]);

        $clienteId = Auth::id();

        if (!$clienteId) {
            session()->flash('error', 'Você precisa estar logado para enviar mensagens.');
            return;
        }

        $mensagemOriginal = Mensagem::find($this->mensagemSelecionadaId);

        if (!$mensagemOriginal || $mensagemOriginal->remetente !== 'adm') {
            session()->flash('error', 'Mensagem inválida para responder.');
            return;
        }

        Mensagem::create([
            'cliente_id' => $clienteId,
            'adm_id'     => null,
            'conteudo'   => $this->respostaMensagem,
            'remetente'  => 'cliente',
        ]);

        $this->respostaMensagem = '';
        $this->mensagemSelecionadaId = null;

        $this->carregarMensagens($clienteId);
    }

    protected function carregarMensagens($clienteId)
    {
        $this->mensagens = Mensagem::where('cliente_id', $clienteId)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.message-livewire');
    }
}
