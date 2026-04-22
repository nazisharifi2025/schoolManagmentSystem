<?php

namespace App\Livewire\Cantract;

use App\Models\Contract;
use Livewire\Component;

class Index extends Component
{
    public $cantract ;
    public function mount(){
        $this->cantract  = Contract::all();
    }
    public function render()
    {
        return view('livewire.cantract.index');
    }
}
