<?php

namespace App\Livewire\Designation;

use Livewire\Component;

class Index extends Component
{
    public $designation;
    public function render()
    {
        return view('livewire.designation.index');
    }
}
