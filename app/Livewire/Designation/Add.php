<?php

namespace App\Livewire\Designation;

use App\Models\Designation;
use Illuminate\Http\Request;
use Livewire\Component;

class Add extends Component
{
    public $Designation ;
    public function mount(){
        $this->Designation = new Designation();
    }
    public function create(Request $request){
        $request->validate([
             "name"=> "required|string|min:3",
        "department_id"=> "required|integer"
        ]);
        $this->Designation->create([
             "name"=> $request->name,
        "department_id"=> $request->department_id
        ]);
    }
    public function render()
    {
        return view('livewire.designation.add');
    }
}
