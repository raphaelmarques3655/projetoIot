<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensoresCreate extends Component
{
    public $ambiente_id = '';
    public $codigo = '';
    public $tipo = '';
    public $descricao = '';
    public $status = true;

    public function store()
    {
        $dados = $this->validate([
            'ambiente_id' => 'required|integer|exists:ambientes,id',
            'codigo' => 'required|string|max:255|unique:sensors,codigo',
            'tipo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'status' => 'required|boolean',
        ]);

        Sensor::create($dados);
        session()->flash('success', 'Sensor cadastrado com sucesso!');
        return redirect()->route('sensor.index');
    }

    public function render()
    {
        return view('livewire.sensores.sensores-create', [
            'ambientes' => Ambiente::orderBy('nome')->get(),
        ]);
    }
}