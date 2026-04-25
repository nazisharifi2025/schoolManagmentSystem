<?php

namespace App\Livewire\Dapartment;

use App\Models\departmint;
use Illuminate\Http\Request;
use Livewire\Component;

class Add extends Component
{
    public $department;
    public function mount(){
        $this->department = new departmint();
    }
    public function create(Request $request){
        $request->validate([
              "name"=> "required|string|min:5",
        "school_id"=> "required|integer"
        ]);
    }
    public function render()
    {
        return view('livewire.dapartment.add');
    }
}
