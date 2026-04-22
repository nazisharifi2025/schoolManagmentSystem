<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Component;

class Index extends Component
{
    public $School = null;
    public function mount(){
        $this->School = School::all();
    }
    public function render()
    {
        return view('livewire.school.index');
    }
}
