<div class="chat">
    <h2>Mensagens</h2>

    <div class="messages">
        @foreach($mensagens as $mensagem)
            <div
                class="msg {{ $mensagem->remetente === 'cliente' ? 'msg-cliente' : 'msg-admin' }}"
                @if($mensagem->remetente === 'adm')
                    wire:click="selecionarMensagem({{ $mensagem->id }})"
                    style="cursor: pointer"
                @endif
            >
                <p>{{ $mensagem->conteudo }}</p>
                <span class="hora">{{ $mensagem->created_at->format('H:i') }}</span>
            </div>
        @endforeach
    </div>


    <form wire:submit.prevent="enviarMensagemCliente" class="form-msg">
        <input type="text" wire:model="novaMensagem" placeholder="Digite sua mensagem..." required>
        <button type="submit">Enviar</button>
    </form>

    
    @if($mensagemSelecionadaId)
        <div class="resposta">
            <h4>Respondendo</h4>
            <textarea wire:model="respostaMensagem" placeholder="Digite sua resposta..."></textarea>
            <button wire:click="enviarResposta">Enviar</button>
            <button wire:click="$set('mensagemSelecionadaId', null)">Cancelar</button>
        </div>
    @endif
</div>
