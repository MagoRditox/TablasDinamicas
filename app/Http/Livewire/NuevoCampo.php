<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Dinamico;

class NuevoCampo extends Component
{
    public $dinamicos;

    protected $rules = [
        'dinamicos.*.name' => 'required',
        'dinamicos.*.value' => 'nullable'
    ];

    public function render()
    {
        return view('livewire.nuevo-campo');
    }
    public function mount()
    {
        $this->dinamicos = Dinamico::all();
    }

    public function add()
    {
        $this->dinamicos->push(new Dinamico());
    }

    public function save()
    {
        $this->validate();
        foreach ($this->dinamicos as $dinamico){
            $dinamico->save();
        }
    }
}
