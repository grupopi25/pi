<div>
   <div class="form-wrapper">
    <h1 class="form-title">Agendar Consulta</h1>

    <div class="alert-success" style="display: none;">

    </div>

    <form action="#" method="POST" class="pet-form">
        <div class="input-grupo">
            <label for="nome_tutor" class="input-label">Nome do Tutor</label>
            <input type="text" name="nome_tutor" class="input-text" value="{{ auth()->user()->name }}" disabled>
        </div>

        <div class="input-grupo">
            <label for="nome_pet" class="input-label">Nome do Pet</label>
             <select name="nome_pet" class="input-select" required>
                <option value="">Selecione o Pet</option>
                @foreach ($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                @endforeach
                @if($pets->isEmpty())
                    <option value="">Nenhum pet cadastrado</option>
                @endif
            </select>
        </div>

        <div class="input-grupo">
            <label for="tipo_pet" class="input-label">Espécie</label>
            <select name="tipo_pet" class="input-select" required>
                <option value="">Selecione a espécie</option>
                @foreach ($pets as $pet )
                <option value="{{ $pet->id }}">{{ $pet->breed }}</option>

                @endforeach
            </select>
        </div>

        <div class="input-grupo">
            <label for="data" class="input-label">Data da Consulta</label>
            <input type="date" name="data" class="input-text" required>
        </div>

        <div class="input-grupo">
            <label for="hora" class="input-label">Hora da Consulta</label>
            <input type="time" name="hora" class="input-text" required>
        </div>

        <div class="input-grupo">
            <label for="motivo" class="input-label">Motivo da Consulta</label>
          <select name="motivo" class="input-select" required>
              <option value="">Selecione o motivo</option>
              <option value="checkup">Check-up</option>
              <option value="vacina">Vacinação</option>
              <option value="consulta">Consulta</option>
                <option value="emergencia">Emergência</option>
                <option value="banho">Banho</option>
                <option value="tosa">Tosa</option>
                <option value="outro">Outro</option>
          </select>

        </div>
        <div class="input-grupo">
            <label for="observacoes" class="input-label">Observações</label>
            <textarea name="observacoes" rows="4" class="input-text" placeholder="Descreva qualquer observação adicional..." required></textarea>
        </div>
        <div class="input-grupo">
            <label for="telefone" class="input-label">Telefone</label>
            <input type="tel" name="telefone" class="input-text" value="{{ auth()->user()->telefone }}" disabled>
        </div>
        <div><h3>Preço R$ <span id="preco">0.00</span></h3></div>


        <button type="submit" class="btn-submit">Agendar</button>
        <a href="#" class="btn-cancel">Cancelar</a>
    </form>
</div>
</div>
