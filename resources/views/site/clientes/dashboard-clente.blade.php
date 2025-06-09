@extends('site.home.index')

@section('content')
    <main class="main-content">
        <h1>Bem-vindo, {{ ucwords(Auth::user()->name) }}!</h1>

        <div class="cards">
            <div class="card">
                <span class="material-symbols-outlined">pets</span>
                <div class="info">
                    <h2>{{ $meuPet }}</h2>
                    <p>Seus Pets</p>
                </div>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">event</span>
                <div class="info">
                    <h2>2</h2>
                    <p>Agendamentos Ativos</p>
                </div>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">medical_services</span>
                <div class="info">
                    <h2>5</h2>
                    <p>Atendimentos Realizados</p>
                </div>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">attach_money</span>
                <div class="info">
                    <h2>R$ 850</h2>
                    <p>Gastos Totais</p>
                </div>
            </div>
        </div>

        <section class="agenda-mensagens">
            <div class="agenda">
                <h2>Próximos Agendamentos</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Pet</th>
                            <th>Serviço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05/06/2025</td>
                            <td>09:00</td>
                            <td>Thor</td>
                            <td>Consulta</td>
                        </tr>
                        <tr>
                            <td>07/06/2025</td>
                            <td>10:30</td>
                            <td>Mel</td>
                            <td>Banho e Tosa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mensagens">
                <h2>Mensagens da Clínica</h2>
                <ul>
                    <li><strong>Clínica:</strong> Lembre-se da vacinação anual do Thor em 05/06.</li>
                    <li><strong>Clínica:</strong> Promoção no banho e tosa até 10/06.</li>
                    <li><strong>Clínica:</strong> Seu pet Mel está com a carteirinha atualizada.</li>
                </ul>
            </div>
        </section>

        <section class="relatorios">
            <h2>Histórico</h2>
            <div class="relatorio-cards">
                <div class="relatorio-card">
                    <h3>Último Atendimento</h3>
                    <p>Consulta - 15/05/2025</p>
                </div>
                <div class="relatorio-card">
                    <h3>Último Agendamento</h3>
                    <p>Banho - 22/05/2025</p>
                </div>
                <div class="relatorio-card">
                    <h3>Próxima Vacinação</h3>
                    <p>05/06/2025</p>
                </div>
            </div>
        </section>
    </main>
@endsection
