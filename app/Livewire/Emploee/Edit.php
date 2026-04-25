<?php

namespace App\Livewire\Emploee;

use App\Models\Emploee;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id ;
    public $emploeeData;
    public function update(Request $request , string $id){
        $this->id = $id ;
    }
    public function mount(){
        $this->emploeeData = Emploee::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.emploee.edit');
    }
}
