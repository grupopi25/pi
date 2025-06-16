<div>
    <div class="form-wrapper">
        <h1 class="form-title">Agendar Consulta</h1>

        @if (session()->has('message'))
            <div class="alert-success">{{ session('message') }}</div>
        @endif

        @if (session()->has('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="storeConsulta" method="POST" class="pet-form">
            {{-- Informações do Tutor --}}
            <div class="input-grupo">
                <label for="nome_tutor" class="input-label">Nome do Tutor</label>
                <input type="text" id="nome_tutor" class="input-text" value="{{ auth()->user()->name }}" disabled>
            </div>

            <div class="input-grupo">
                <label for="telefone" class="input-label">Telefone</label>
                <input type="tel" id="telefone" class="input-text" value="{{ auth()->user()->telefone }}" disabled>
            </div>

            {{-- Seleção do Pet --}}
            <div class="input-grupo">
                <label for="pet_id" class="input-label">Pet</label>
                <select id="pet_id" wire:model="pet_id" class="input-select" required>
                    <option value="">Selecione o Pet</option>
                    @foreach ($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }} ({{ $pet->breed }})</option>
                    @endforeach
                    @if($pets->isEmpty())
                        <option value="">Nenhum pet cadastrado</option>
                    @endif
                </select>
                @error('pet_id') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            {{-- Data e Hora --}}
            <div class="input-grupo">
                <label for="data" class="input-label">Data da Consulta</label>
                <input type="date" id="data" wire:model="data" class="input-text" required>
                @error('data') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="input-grupo">
                <label for="hora" class="input-label">Hora da Consulta</label>
                <input type="time" id="hora" wire:model="hora" class="input-text" required>
                @error('hora') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            {{-- Motivo --}}
            <div class="input-grupo">
                <label for="motivo" class="input-label">Motivo da Consulta</label>
                <select id="motivo" wire:model="motivo" class="input-select" required>
                    <option value="">Selecione o motivo</option>
                    <option value="checkup">Check-up</option>
                    <option value="vacina">Vacinação</option>
                    <option value="consulta">Consulta</option>
                    <option value="emergencia">Emergência</option>
                    <option value="banho">Banho</option>
                    <option value="tosa">Tosa</option>
                    <option value="outro">Outro</option>
                </select>
                @error('motivo') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            {{-- Observações --}}
            <div class="input-grupo">
                <label for="observacoes" class="input-label">Observações</label>
                <textarea id="observacoes" wire:model="observacoes" rows="4" class="input-text" placeholder="Descreva qualquer observação adicional..." required></textarea>
                @error('observacoes') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            {{-- Preço (pode ser dinâmico depois) --}}
            <div><h3>Preço R$ <span id="preco">0.00</span></h3></div>

            {{-- Botões --}}
            <button type="submit" class="btn-submit">Agendar</button>
            <a href="#" class="btn-cancel">Cancelar</a>
        </form>
    </div>
</div>
