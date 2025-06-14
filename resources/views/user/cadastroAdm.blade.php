<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Administrador</title>
    @vite(['resources/css/admin/adminCadastro.css', 'resources/js/app.js'])
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Cadastro de Administrador</h2>



        <form method="POST" class="admin-form" action="{{ route('adm.storeAdm') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="name" required />

            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required />
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirme a Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required />
            </div>

            <input type="hidden" name="tipo" value="adm" />

            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
