<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Component;

class Add extends Component
{
    public $school;
    public function mount(){
        $this->school = new School();
    }
    public function render()
    {
        return view('livewire.school.add');
    }
}
