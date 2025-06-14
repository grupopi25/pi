<div class="message-container">
    <h2 class="message-title">Mensagens</h2>

    <div class="message-box">
        <section class="message-list">

            @foreach($mensagens as $mensagem)
                <div class="message">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>
                                {{ $mensagem->remetente === 'adm' ? 'Clínica' : 'Você' }}
                            </strong>
                        </li>
                    </ul>
                    <p>{{ $mensagem->conteudo }}</p>
                </div>
            @endforeach


            <div class="message">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Você</strong></li>
                </ul>
                <form wire:submit.prevent="enviarMensagemCliente" class="form-list">
                    <input type="text" wire:model="novaMensagem" placeholder="Digite sua mensagem" required>
                    <button type="submit">Enviar</button>
                </form>
            </div>

        </section>
    </div>
</div>
