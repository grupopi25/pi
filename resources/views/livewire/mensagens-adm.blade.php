<div>
    <main class="main-content">
        <h1>Mensagens</h1>
    </main>

    <div class="right-section">
        <div class="nav">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="dark-mode">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
        </div>
    </div>

    <div class="message-form-container">

        @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="enviarMensagem" class="message-form">

            <div class="form-group">
                <label for="cliente_id">Selecionar Cliente</label>
                <select wire:model="cliente_id" id="cliente_id" required>
                    <option value="">-- Selecione um cliente --</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
                @error('cliente_id') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea wire:model="mensagem" id="mensagem" rows="4" placeholder="Digite a mensagem para o cliente..." required></textarea>
                @error('mensagem') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn-enviar">Enviar Mensagem</button>
        </form>


        @if ($cliente_id)
            <div class="mensagens-historico" style="margin-top: 2rem;">
                <h3>Histórico de Mensagens</h3>

                @forelse ($mensagens as $mensagem)
                    <div class="mensagem-item" style="padding: 10px; margin-bottom: 10px; background: #f9f9f9; border-radius: 5px;">
                        <strong>{{ $mensagem->remetente === 'adm' ? 'Admin' : 'Cliente' }}:</strong>
                        <p>{{ $mensagem->conteudo }}</p>
                        <small>{{ \Carbon\Carbon::parse($mensagem->created_at)->format('d/m/Y H:i') }}</small>
                    </div>
                @empty
                    <p>Nenhuma mensagem ainda com este cliente.</p>
                @endforelse
            </div>
        @endif
    </div>
</div>
