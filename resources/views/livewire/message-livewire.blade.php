<div class="message-container">
    <h2 class="message-title">Mensagens</h2>

    <div class="message-box">
        <section class="message-list">
            <div class="message">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Clínica</strong></li>
                </ul>
                <p>Olá, seu atendimento foi agendado com sucesso.</p>
                <form action="" class="form-list">
                    <input type="text" placeholder="Digite sua mensagem" wire:model="message">
                    <button type="submit" wire:click.prevent="sendMessage">Enviar</button>
                </form>
            </div>

            <div class="message">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Cliente</strong></li>
                </ul>
                <p>Bom dia! Gostaria de confirmar se meu pet precisa jejum antes do exame.</p>
            </div>

            <div class="message">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Clínica</strong></li>
                </ul>
                <p>Sim! Para exames de sangue, jejum de 8 horas é recomendado.</p>
            </div>

            <div class="message">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Cliente</strong></li>
                </ul>
                <p>Perfeito, muito obrigado pela orientação!</p>
            </div>
        </section>
    </div>
</div>
