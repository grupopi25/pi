<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite(['resources/css/user/cadastroUser.css', 'resources/js/app.js'])

    <title>Cadastro</title>
</head>
<body>

<div class="container">
    <form action="{{ route('store-user') }}" method="POST">
        @csrf

        <h1>Cadastre-se</h1>


        <div class="box-container">
         <input type="text" placeholder="Nome" name="name" required autocomplete="off" value="{{ old('name') }}">
        </div>

        <div class="box-container">
            <input type="email" placeholder="Email" name="email" required autocomplete="off" value="{{ old('email') }}">
        </div>
        <div class="box-container">
            <input type="tel" placeholder="Seu telefone para contato" name="telefone" required autocomplete="off" value="{{ old('telefone') }}">
        </div>

        <div class="box-container">
           <input type="password" placeholder="Senha" name="password" required autocomplete="off" value="{{ old('password') }}">
        </div>

        <div class="box-container">
            <input type="checkbox" id="check" required>
            <label for="check" id="termo">Política de Privacidade</label>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>
         @if (@session('success'))
             <p style="color:#086; text-align:center; margin-top:5px;">
            {{ session('success') }}</p>

        @endif

         @if (@session('error'))
            <p style="color:#f00;text-align:center; margin-top:5px;">
            {{ session('error') }}</p>

        @endif
    </form>
</div>

</body>
</html>
