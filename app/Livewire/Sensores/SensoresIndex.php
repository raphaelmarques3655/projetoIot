<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use App\Models\Ambiente;
use Livewire\Component;

class SensoresIndex extends Component
{
    public $search='';

    public function delete($id){
        $sensor = Sensor::find($id);

        if($sensor != null){
            $sensor->delete();
            session()->flash('success', 'Excluído');
        }
    }

    public function render()
    {
        $sensores = Sensor::all();
        $nomesAmbientes = Ambiente::pluck('nome', 'id');
        return view('livewire.sensores.sensores-index', compact('sensores', 'nomesAmbientes'));
    }

    public function status($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
    }
}