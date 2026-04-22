<?php

namespace App\Livewire\Emploee;

use App\Models\Emploee;
use Livewire\Component;

class Index extends Component
{
    public $emploeey = null ;
    public function mount(){
        $this->emploeey = Emploee::all();
    }
    public function render()
    
    {
        return view('livewire.emploee.index');
    }
}
