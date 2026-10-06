<div>
    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Painel Geral de Telemetria</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <span class="badge bg-primary p-2 fs-6 shadow-sm">
                <i class="bi bi-clock me-1"></i> Monitoramento Ativo
            </span>
        </div>
    </div>

    <!-- Cartões de Contagem Dinâmicos -->
    <div class="row g-3 mb-4">
        <!-- Ambientes -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded me-3">
                        <i class="bi bi-door-open fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Ambientes</h6>
                        <h4 class="mb-0 fw-bold">{{ $totalAmbientes }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sensores -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded me-3">
                        <i class="bi bi-cpu fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Sensores</h6>
                        <h4 class="mb-0 fw-bold">{{ $totalSensores }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registros de Hoje -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <div class="bg-warning bg-opacity-10 text-warning p-3 rounded me-3">
                        <i class="bi bi-hdd-network fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Registros Hoje</h6>
                        <h4 class="mb-0 fw-bold">{{ $totalRegistros }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usuários -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <div class="bg-danger bg-opacity-10 text-danger p-3 rounded me-3">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Usuários do Sistema</h6>
                        <h4 class="mb-0 fw-bold">{{ $totalUsuarios }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de Últimas Atividades -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 border-bottom-0">
            <h5 class="mb-0 fw-bold text-secondary">Últimos Registros Coletados</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Ambiente</th>
                        <th>Sensor</th>
                        <th>Valor Capturado</th>
                        <th>Data/Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ultimosRegistros as $registro)
                        <tr>
                            <td>#{{ $registro->id }}</td>
                            <td>{{ $registro->ambiente->nome ?? 'Não informado' }}</td>
                            <td>{{ $registro->sensor->nome ?? 'Não informado' }}</td>
                            <td>
                                <span class="badge bg-info text-dark fw-semibold fs-6">
                                    {{ $registro->valor ?? 'N/A' }}
                                </span>
                            </td>
                            <td>{{ $registro->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                <i class="bi bi-exclamation-circle me-1"></i> Nenhum registro encontrado para hoje.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
