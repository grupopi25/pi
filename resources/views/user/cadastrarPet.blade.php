@extends('site.home.index')
@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
    @endphp

    <div class="form-wrapper">
        <h1 class="form-title">Cadastrar Pet</h1>

        <h3 class="logged-user"><strong>Usuário Logado:</strong> {{ ucwords(Auth::user()->name) }}</h3>




        <form action="{{ route('pets.store') }}" method="POST" class="pet-form">
            @csrf

            <div class="input-grupo">
                <label class="input-label">Nome</label>
                <input type="text" name="name" class="input-nome" required>
            </div>
            {{-- ESPECIE DO ANIMAL --}}
            <div class="input-grupo">
                <label for="animal-type" class="input-nomes">Especie</label>
                <select id="animal-type" name="species" class="input-select" required>
                    <option value="">Selecione a espécie</option>

                    <optgroup label="Animais Domésticos Comuns">
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                        <option value="coelho">Coelho</option>
                        <option value="hamster">Hamster</option>
                        <option value="porquinho-da-india">Porquinho-da-índia</option>
                        <option value="pássaro">Pássaro</option>
                        <option value="peixe">Peixe</option>
                    </optgroup>

                    <optgroup label="Animais Exóticos">
                        <option value="furão">Furão</option>
                        <option value="tartaruga">Tartaruga</option>
                        <option value="cobra">Cobra</option>
                        <option value="lagarto">Lagarto</option>
                        <option value="arara">Arara</option>
                    </optgroup>

                    <optgroup label="Animais de Fazenda">
                        <option value="cavalo">Cavalo</option>
                        <option value="vaca">Vaca</option>
                        <option value="ovelha">Ovelha</option>
                        <option value="cabra">Cabra</option>
                        <option value="porco">Porco</option>
                    </optgroup>
                </select>
            </div>

            {{-- RAÇA DO ANIMAIL --}}
            <div class="input-grupo">
                <label for="breed" class="input-nomes">Raça</label>
                <select id="breed" name="breed" class="input-select" required>
                    <option value="">Selecione a raça</option>

                    <optgroup label="Cachorro">
                        <option value="labrador">Labrador Retriever</option>
                        <option value="poodle">Poodle</option>
                        <option value="bulldog">Bulldog</option>
                        <option value="beagle">Beagle</option>
                        <option value="pastor-alemao">Pastor Alemão</option>
                        <option value="golden-retriever">Golden Retriever</option>
                    </optgroup>

                    <optgroup label="Gato">
                        <option value="siames">Siamês</option>
                        <option value="persa">Persa</option>
                        <option value="maine-coon">Maine Coon</option>
                        <option value="sphynx">Sphynx</option>
                        <option value="ragdoll">Ragdoll</option>
                    </optgroup>

                    <optgroup label="Coelho">
                        <option value="anão">Anão</option>
                        <option value="holandês">Holandês</option>
                        <option value="rex">Rex</option>
                        <option value="lionhead">Lionhead</option>
                    </optgroup>

                    <optgroup label="Hamster">
                        <option value="sírio">Sírio</option>
                        <option value="anão-russo">Anão Russo</option>
                        <option value="robo">Robo</option>
                        <option value="chines">Chinês</option>
                    </optgroup>

                    <optgroup label="Porquinho-da-índia">
                        <option value="abissínio">Abissínio</option>
                        <option value="peruano">Peruano</option>
                        <option value="silkie">Silkie</option>
                        <option value="coronet">Coronet</option>
                    </optgroup>

                    <optgroup label="Pássaro">
                        <option value="calopsita">Calopsita</option>
                        <option value="periquito">Periquito</option>
                        <option value="canário">Canário</option>
                        <option value="agapornis">Agapornis</option>
                        <option value="papagaio">Papagaio</option>
                    </optgroup>

                    <optgroup label="Peixe">
                        <option value="betta">Betta</option>
                        <option value="goldfish">Goldfish</option>
                        <option value="neon">Neon</option>
                        <option value="guppy">Guppy</option>
                        <option value="disco">Disco</option>
                    </optgroup>

                    <optgroup label="Furão">
                        <option value="padrão">Padrão</option>
                        <option value="albino">Albino</option>
                        <option value="canela">Canela</option>
                    </optgroup>

                    <optgroup label="Tartaruga">
                        <option value="tigre-dagua">Tigre-d'Água</option>
                        <option value="jabuti-piranga">Jabuti Piranga</option>
                        <option value="jabuti-tinga">Jabuti Tinga</option>
                    </optgroup>

                    <optgroup label="Cobra">
                        <option value="corn-snake">Corn Snake</option>
                        <option value="python">Píton</option>
                        <option value="jiboia">Jiboia</option>
                    </optgroup>

                    <optgroup label="Lagarto">
                        <option value="gecko">Gecko</option>
                        <option value="iguana">Iguana</option>
                        <option value="teiu">Teiú</option>
                    </optgroup>

                    <optgroup label="Arara">
                        <option value="arara-azul">Arara Azul</option>
                        <option value="arara-vermelha">Arara Vermelha</option>
                        <option value="arara-canindé">Arara Canindé</option>
                    </optgroup>

                    <optgroup label="Cavalo">
                        <option value="mangalarga">Mangalarga Marchador</option>
                        <option value="quarto-de-milha">Quarto de Milha</option>
                        <option value="criollo">Criollo</option>
                    </optgroup>

                    <optgroup label="Vaca">
                        <option value="holandesa">Holandesa</option>
                        <option value="gir">Gir</option>
                        <option value="nelore">Nelore</option>
                    </optgroup>

                    <optgroup label="Ovelha">
                        <option value="suffolk">Suffolk</option>
                        <option value="dorper">Dorper</option>
                        <option value="santa-ines">Santa Inês</option>
                    </optgroup>

                    <optgroup label="Cabra">
                        <option value="boer">Boer</option>
                        <option value="alpina">Alpina</option>
                        <option value="saanen">Saanen</option>
                    </optgroup>

                    <optgroup label="Porco">
                        <option value="large-white">Large White</option>
                        <option value="duroc">Duroc</option>
                        <option value="pietrain">Pietrain</option>
                    </optgroup>
                </select>
            </div>


            {{-- COR DO ANIMAL --}}
            <div class="input-grupo">
                <label for="color" class="input-nomes">Cor</label>
                <select id="color" name="color" class="input-select" required>
                    <option value="">Selecione a cor</option>
                    <option value="branco">Branco</option>
                    <option value="preto">Preto</option>
                    <option value="cinza">Cinza</option>
                    <option value="marrom">Marrom</option>
                    <option value="caramelo">Caramelo</option>
                    <option value="bege">Bege</option>
                    <option value="dourado">Dourado</option>
                    <option value="creme">Creme</option>
                    <option value="castanho">Castanho</option>
                    <option value="ruivo">Ruivo</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="laranja">Laranja</option>
                    <option value="azul">Azul</option>
                    <option value="verde">Verde</option>
                    <option value="vermelho">Vermelho</option>
                    <option value="lilas">Lilás</option>
                    <option value="rosa">Rosa</option>
                    <option value="prateado">Prateado</option>
                    <option value="acinzentado">Acinzentado</option>
                    <option value="alaranjado">Alaranjado</option>
                    <option value="rajado">Rajado</option>
                    <option value="malhado">Malhado</option>
                    <option value="mesclado">Mesclado</option>
                    <option value="tigrado">Tigrado</option>
                    <option value="manchado">Manchado</option>
                    <option value="listrado">Listrado</option>
                    <option value="pontilhado">Pontilhado</option>
                    <option value="branco-preto">Branco com preto</option>
                    <option value="branco-marrom">Branco com marrom</option>
                    <option value="branco-caramelo">Branco com caramelo</option>
                    <option value="preto-marrom">Preto com marrom</option>
                    <option value="preto-cinza">Preto com cinza</option>
                    </optgroup>
                </select>
            </div>


            <div class="input-grupo">
                <label class="input-nomes">Sexo</label>
                <select name="gender" class="input-select">
                    <option value="">Selecione</option>
                    <option value="Macho">Macho</option>
                    <option value="Fêmea">Fêmea</option>
                </select>
            </div>

            <div class="input-grupo">
                <label class="input-nomes">Data de Nascimento</label>
                <input type="date" name="birth_date" class="input-text">
            </div>

            <div class="input-grupo">
                <label class="input-nomes">Peso (kg)</label>
                <input type="number" name="weight" step="0.01" class="input-text">
            </div>

            <div class="input-grupo">
                <label class="input-nomes">Cliente (Dono)</label>
                <input type="text" class="input-text" value="{{ Auth::user()->name }}" disabled>
            </div>
            @if (session('success'))
                <div class="alert-success"
                    style="   background-color: #d4edda;color: #155724;padding: 12px;border-radius: 6px;margin-bottom: 20px;border: 1px solid #c3e6cb;">
                    {{ session('success') }}
                </div>
            @endif

            <button type="submit" class="btn-submit">Cadastrar</button>
            <a href="{{ route('pets.index') }}" class="btn-cancel">Cancelar</a>
        </form>
    </div>
@endsection
