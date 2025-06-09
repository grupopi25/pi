<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/user/cadastroUser.css', 'resources/js/app.js'])
    <title>Login</title>
</head>
<body>

<div class="container login">
    <form action="{{ route('user-login') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <div class="box-container">
            <input type="text" placeholder="Email" name="email" required autocomplete="off" value="{{ old('email') }}">
            <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/ffffff/user--v1.png" alt="user"/>
        </div>

        <div class="box-container">
            <input type="password" placeholder="Senha" name="password" required autocomplete="off" value="{{ old('password') }}">
            <img width="20" height="20" src="https://img.icons8.com/material/24/ffffff/lock--v1.png" alt="lock"/>

        </div>
          @if (@session('success'))
             <p style="color:#086; text-align:center; margin-top:5px;">
            {{ session('success') }}</p>

        @endif

         @if (@session('error'))
            <p style="color:#f00;text-align:center; margin-top:5px;">
            {{ session('error') }}</p>

        @endif

        <div class="box-container">
            <a href="#">Esqueci minha senha</a>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>

        <div class="register">
            <p>Não está cadastrado? <a href="{{ route('cadastro') }}">Cadastrar</a></p>
        </div>
    </form>
</div>

</body>
</html>
