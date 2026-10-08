<?php

namespace App\Livewire;

use Livewire\Component;
// Use o seu Model correspondente aqui se for buscar do banco, ex: use App\Models\Ambiente;

class Dashboard extends Component
{
    public function render()
    {
        // 1. Busque ou defina a lógica para contar os ambientes
        // Exemplo buscando do banco: $totalAmbientes = Ambiente::count();
        $totalAmbientes = 0; // Substitua pelo cálculo ou valor real do seu sistema

        // 2. O mesmo erro deve acontecer com "Total Sensores" na linha 37 do seu Blade.
        // Já deixei a variável configurada aqui para você não ter um novo erro em seguida:
        $totalSensores = 0; 

        // 3. Envia as variáveis tratadas para a View do Blade
        return view('livewire.dashboard', [
            'totalAmbientes' => $totalAmbientes,
            'totalSensores'   => $totalSensores,
        ]);
    }
}
