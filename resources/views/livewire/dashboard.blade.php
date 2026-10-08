<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Ambientes</p>
                    <h2 class="h3 mb-0">{{ $totalAmbientes }}</h2>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Sensores</p>
                    <h2 class="h3 mb-0">{{ $totalSensores }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card bg-white shadow-sm border-0">
        <div class="card-header bg-white">
            
        </div>

        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Ambientes</th>
                            <th>Sensores</th>
                        </tr>

                    </thead>
                    
                </table>

            </div>

        </div>
    </div>
</div>