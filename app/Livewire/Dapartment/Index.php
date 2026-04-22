<?php

namespace App\Livewire\Dapartment;

use App\Models\departmint;
use Livewire\Component;

class Index extends Component
{
    public $departmint ;
    public function mount(){
        $this->departmint = departmint::all();
    }
    public function render()
    {
        return view('livewire.dapartment.index');
    }
}
