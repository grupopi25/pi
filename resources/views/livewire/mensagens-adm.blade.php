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

        {{-- Alertas --}}
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
    </div>
</div>
