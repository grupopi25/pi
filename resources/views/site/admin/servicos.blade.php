@extends('layouts.admin')

@section('title', 'Service')

@section('content')
<main class="main-content">
    <h1>Serviços</h1>

    <div>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Consulta</th>
                <th>Telefone</th>
                <th>Preço</th>
                <th>Situação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultas as $consulta)
                <tr>
                    <td>{{ $consulta->cliente->nome }}</td>
                    <td>{{ $consulta->observacoes }}</td>
                    <td>{{ $consulta->data }}</td>
                    <td>{{ $consulta->hora }}</td>
                    <td>{{ $consulta->motivo }}</td>
                    <td>{{ $consulta->cliente->telefone }}</td>
                    <td>R$ 20,00</td>
                    <td>
                        <button  onclick="concluirConsulta(this)" style="background-color:#0c78f3; color: white; border: none; border-radius: 5px; padding:10px; cursor: pointer;">
                            Concluir
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

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

@endsection
