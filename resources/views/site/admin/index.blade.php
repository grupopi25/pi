@extends('layouts.admin')

@section('title', 'Home')

@section('content')

    <main>
        <h1>Análises da Clínica Veterinária</h1>
        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>Total de Atendimentos</h3>
                        <h1>1.245</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+12%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>Pets Cadastrados</h3>
                        <h1>837</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+8%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Clientes Cadastrados</h3>
                        <h1>{{ $totalClientes }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+15%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Vacinas Pendentes</h3>
                        <h1>5</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+15%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Consultas de hoje</h3>
                        <h1>15</h1>
                        <span>hoje</span>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+15%</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Receita Total (R$)</h3>
                        <h1>58.430,00</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage positive">
                            <p>+15%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Analyses -->

        <!-- Recent Orders Table -->
        <div class="recent-orders">
            <h2>Atendimentos Recentes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Pet</th>
                        <th>Cliente</th>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Thor</td>
                        <td>Maria Silva</td>
                        <td>Consulta Geral</td>
                        <td>22/05/2025</td>
                        <td><span class="status success">Concluído</span></td>
                    </tr>
                    <tr>
                        <td>Luna</td>
                        <td>João Pereira</td>
                        <td>Vacinação</td>
                        <td>23/05/2025</td>
                        <td><span class="status warning">Agendado</span></td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>Carla Souza</td>
                        <td>Exame Laboratorial</td>
                        <td>23/05/2025</td>
                        <td><span class="status success">Concluído</span></td>
                    </tr>
                </tbody>
            </table>
            <a href="#">Ver Todos</a>
        </div>
        <!-- End of Recent Orders -->
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

            <div class="profile">
                <div class="info">
                    <p>Olá, <b>Admin</b></p>
                    <small class="text-muted">Administrador</small>
                </div>
                <div class="profile-photo">
                    <img src="{{ asset('assets/logo-preto.png') }}" alt="Foto do usuário" />
                </div>
            </div>
        </div>
        <!-- End of Nav -->

        <div class="user-profile">
            <div class="logo">
                <img src="{{ asset('assets/logo-preto.png') }}" alt="Logo Clínica Veterinária" />
                <h2>Clínica Vet</h2>
                <p>Gestão Veterinária</p>
            </div>
        </div>

        <div class="reminders">
            <div class="header">
                <h2>Lembretes</h2>
                <span class="material-icons-sharp">notifications_none</span>
            </div>

            <!-- Lista de lembretes -->
            <div class="reminder-list">
                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">event</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Reunião com equipe</h3>
                            <small class="text-muted">25/05/2025 - 10:00</small>
                        </div>
                        <span class="material-icons-sharp delete-btn">delete</span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">edit</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Atualizar estoque</h3>
                            <small class="text-muted">28/05/2025 - 15:00</small>
                        </div>
                        <span class="material-icons-sharp delete-btn">delete</span>
                    </div>
                </div>

                <!-- Botão para abrir o formulário -->
                <div class="notification add-reminder" id="openForm">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Adicionar Lembrete</h3>
                    </div>
                </div>
            </div>

            <!-- Formulário -->
            <div class="reminder-form" id="reminderForm">
                <h3>Novo Lembrete</h3>
                <form id="form">
                    <input type="text" id="title" placeholder="Título do lembrete" required>
                    <div class="date-time">
                        <input type="date" id="date" required>
                        <input type="time" id="time" required>
                    </div>
                    <div class="form-actions">
                        <button type="submit">Adicionar</button>
                        <button type="button" id="cancelForm">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

@endsection
