<?php

namespace App\Livewire\Ambientes;

use App\Models\Ambiente;
use Livewire\Component;

class AmbientesIndex extends Component
{
    public function delete($id){
        $ambiente = Ambiente::find($id);

        if($ambiente != null){
            $ambiente ->delete;

            session()->flash('success', 'Deletado');
        }
        return redirect()->route('ambiente.index');
    }



    public function render()
    {

        $ambiente = Ambiente::all();

        return view('livewire.ambientes.ambientes-index', compact('ambiente'));
    }
}