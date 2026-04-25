<?php

namespace App\Livewire\Dapartment;

use App\Models\departmint;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id ;
    public $departmentData;
    public function update(Request $request,string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->departmentData = departmint::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.dapartment.edit');
    }
}
