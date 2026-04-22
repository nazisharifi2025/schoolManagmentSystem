<?php

namespace App\Livewire\School;

use Livewire\Component;

class Index extends Component
{
    $School = null;
    public function mount(){
        $this->School = Schools::all();
    }
    public function render()
    {
        return view('livewire.school.index');
    }
}
