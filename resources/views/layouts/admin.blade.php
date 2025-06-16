<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite(['resources/css/admin/adm.css', 'resources/js/app.js'])
    @vite(['resources/css/admin/clientes.css', 'resources/js/script.js'])
    @vite(['resources/css/admin/mensagens.css'])
    @vite([ 'resources/js/animais.js'])


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />


    <title>@yield('title', 'Perfil do Cliente')</title>
</head>

<body>

    {{-- NavBar --}}
    <div class="container">
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('assets/logo-vermelho.png') }}" alt="Logo Clínica Veterinária" />
                    <h2>Clínica<span class="danger">Vet</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="{{ route('adm.dashboard') }}"
                    class="{{ request()->routeIs('adm.dashboard') ? 'active' : '' }}">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="{{ route('adm.pets') }}" class="{{ request()->routeIs('adm.pets') ? 'active' : '' }}">
                    <span class="material-icons-sharp">pets</span>
                    <h3>Pets</h3>
                </a>

                <a href="{{ route('adm.clients') }}" class="{{ request()->routeIs('adm.clients') ? 'active' : '' }}">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Clientes</h3>
                </a>

                <a href="{{ route('adm.mensage') }}" class="{{ request()->routeIs('adm.mensage') ? 'active' : '' }}">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Mensagens</h3>
                    <span class="message-count">5</span>
                </a>

                <a href="{{ route('adm.service') }}" class="{{ request()->routeIs('adm.service') ? 'active' : '' }}">
                    <span class="material-icons-sharp">construction</span>
                    <h3>Serviços</h3>
                </a>



                <a href="{{ route('logout') }}">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>


        @yield('content')

    </div>

<script>
       function concluirConsulta(botao) {
        botao.textContent = 'Concluído';
        botao.style.backgroundColor = '#28a745';
        botao.disabled = true; r
    }

</script>
</body>

</html>
