<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Painel de Telemetria' }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://jsdelivr.net" rel="stylesheet">

    @livewireStyles

    <style>
        body {
            font-size: .875rem;
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }
        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }
    </style>
</head>
<body>

    <!-- Topo / Navbar -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Telemetria System</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav w-100 justify-content-end d-flex pe-3">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3 text-white-50" href="/"><i class="bi bi-box-arrow-left me-1"></i> Sair</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Menu Lateral / Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a class="nav-link active fw-bold text-primary" href="/dashboard">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-door-open me-2"></i> Ambientes
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-cpu me-2"></i> Sensores
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-hdd-network me-2"></i> Registros
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Conteúdo Principal Dinâmico -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://jsdelivr.net"></script>
    
    @livewireScripts
</body>
</html>
