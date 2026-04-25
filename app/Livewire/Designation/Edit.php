<?php

namespace App\Livewire\Designation;

use App\Models\Designation;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id ;
    public $designationData;
    public function update(Request $request , string $id){
        $this->id = $id ;
    } 
    public function mount(){
        $this->designationData = Designation::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.designation.edit');
    }
}
