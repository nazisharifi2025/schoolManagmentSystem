<?php

namespace App\Livewire\Emploee;

use App\Models\Emploee;
use Livewire\Component;

class Add extends Component
{
     public $emploee;
     public function mount(){
        $this->emploee = new Emploee();
     }
    public function render()
    {

        return view('livewire.emploee.add');
    }
}
