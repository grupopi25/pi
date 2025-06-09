@extends('site.home.index')

@section('title', 'Agendar Consulta')

@section('content')
<div class="form-wrapper">
    <h1 class="form-title">Agendar Consulta</h1>

    <div class="alert-success" style="display: none;">
        <!-- Mensagem de sucesso aqui -->
    </div>

    <form action="#" method="POST" class="pet-form">
        <div class="input-grupo">
            <label for="nome_tutor" class="input-label">Nome do Tutor</label>
            <input type="text" name="nome_tutor" class="input-text" value="Nome do Usuário" disabled>
        </div>

        <div class="input-grupo">
            <label for="nome_pet" class="input-label">Nome do Pet</label>
            <input type="text" name="nome_pet" class="input-text" required>
        </div>

        <div class="input-grupo">
            <label for="tipo_pet" class="input-label">Espécie</label>
            <select name="tipo_pet" class="input-select" required>
                <option value="">Selecione a espécie</option>
                <option value="cachorro">Cachorro</option>
                <option value="gato">Gato</option>
                <option value="coelho">Coelho</option>
                <option value="outro">Outro</option>
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
            <textarea name="motivo" rows="4" class="input-text" placeholder="Descreva o motivo da consulta..." required></textarea>
        </div>

        <button type="submit" class="btn-submit">Agendar</button>
        <a href="#" class="btn-cancel">Cancelar</a>
    </form>
</div>

@endsection
