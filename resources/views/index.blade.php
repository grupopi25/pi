@extends('layouts.index')

@section('title', 'Boas vindas')

@section('header')
<header>
    <nav>
        <h1>Clínica <span class="destaque">Veterinária</span></h1>
        <ul>
            <li><a class="btn" href="{{ route('login') }}">Login</a></li>
            <li><a class="btn" href="{{ route('cadastro') }}">Cadastro</a></li>
        </ul>
    </nav>
</header>
@endsection

@section('content')
<main>
    <h1>
        <i class="material-symbols-outlined">pets</i>
         Cuide de quem te ama <br>
        sem dizer uma <span class="destaque">palavra</span>!
    </h1>

    <div class="subtitulo">
        <h2 class="apresentacao">
            Cadastre-se agora na nossa clínica veterinária e <br>
            garanta atendimento de qualidade.
        </h2>
        <h2 class="apresentacao">
            Seu pet merece o melhor <span class="destaque">—</span> e você também!
        </h2>
    </div>

    <a href="{{ route('cadastro') }}" class="btn btn-modificado" >Cadastrar-se</a>
</main>
@endsection
