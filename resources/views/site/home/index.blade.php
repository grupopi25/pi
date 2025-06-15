<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    @vite(['resources/css/home/index.css', 'resources/js/app.js'])

    @vite(['resources/css/home/dashboard.css'])
    @vite(['resources/css/home/cadastrar-pet.css'])
    @vite(['resources/css/home/sobre.css'])
    @vite(['resources/css/home/message.css'])


    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body>
@php
use App\Models\Mensagem;
use Illuminate\Support\Facades\Auth;

$contadorMensagens = 0;

if (Auth::check()) {
    $contadorMensagens = Mensagem::where('cliente_id', Auth::id())
        ->where('remetente', 'adm')
        ->where('lida', false)
        ->count();
}
// No seu controller da rota mensagens.index


@endphp


    <div class="container">
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('assets/logo-vermelho.png') }}" alt="Logo Clínica Veterinária" />
                    <h2>Clínica<span class="danger">Vet</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="{{ route('dashboard') }}"  class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    <span class="material-symbols-outlined">dashboard</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="{{ route('pets.create') }}">
                    <span class="material-symbols-outlined">pets</span>
                    <h3>Cadastrar Pet</h3>
                </a>

                <a href="{{ route('consulta') }}">
                    <span class="material-symbols-outlined">person_outline</span>
                    <h3>Consultas</h3>
                </a>

                <a href="{{ route('mensagens.index') }}">
    <span class="material-symbols-outlined">mail_outline</span>
    <h3>Mensagens</h3>
    @if($contadorMensagens > 0)
        <span class="message-count">{{ $contadorMensagens }}</span>
    @endif
</a>

                </a>
                 <a href="{{ route('sobre') }}">
                    <span class="material-symbols-outlined">info</span>
                    <h3>Sobre</h3>
                </a>

                <a href="">
                    <span class="material-symbols-outlined">construction</span>
                    <h3>Serviços</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">event</span>
                    <h3>Agendamentos</h3>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">medical_services</span>
                    <h3>Atendimentos</h3>
                </a>

                <a href="">
                    <span class="material-symbols-outlined">attach_money</span>
                    <h3>Situação</h3>
                </a>



                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
