<?php

namespace App\Livewire\School;

use Livewire\Component;

class Edit extends Component
{
    public $id ;
    public $schoolInfo ;
    public function update(Request $request , string $id){
        $this->id = $id ;
    }
    public function render()
    {
        return view('livewire.school.edit');
    }
}
