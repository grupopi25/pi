@extends('layouts.admin')

@section('title', 'Pets')


@section('content')


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <main class="main-content">
        <h1 class="opcao">Pets</h1>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Raça</th>
                        <th>Cor</th>
                        <th>Sexo</th>
                        <th>Peso</th>
                        <th>Data de Nascimento</th>
                        
                        <th>Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pets as $pet)
                        <tr>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->breed }}</td>
                            <td>{{ $pet->color }}</td>
                            <td>{{ $pet->gender }}</td>
                            <td>{{ $pet->weight }} kg</td>
                            <td>{{ $pet->birth_date ? date('d/m/Y', strtotime($pet->birth_date)) : '-' }}</td>
                            <td>{{ $pet->user->name ?? 'Sem usuário' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </section>
    </main>
   





@endsection
