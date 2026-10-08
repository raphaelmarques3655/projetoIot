<?php

namespace App\Livewire\Ambientes;

use App\Models\Ambiente;
use Livewire\Component;

class AmbientesCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function store(){
        Ambiente::create([
            'nome' => $this -> nome,
            'descricao'=> $this-> descricao,
            'status'=> $this-> status,

        ]);
         
        session()->flash('success', 'Cadastrado');
        return redirect()->route('ambiente.index');

    }

    public function render()
    {
        return view('livewire.ambientes.ambientes-create');
    }
}
