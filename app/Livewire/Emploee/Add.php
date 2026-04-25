<?php

namespace App\Livewire\Emploee;

use App\Models\Emploee;
use Illuminate\Http\Request;
use Livewire\Component;

class Add extends Component
{
     public $emploee;
     public function mount(){
        $this->emploee = new Emploee();
     }
     public function Create(Request $request){
        $request->validate([
        "firstName" => "required|string|min:4",
        "LastName"=> "required|string|min:6",
        "tazkera"=> "required|integer",
        "email" => "required|string",
        "phone"=> "nullable|string|max:10",
        "designation_id"=> "required|integer"
        ]);
     }
    public function render()
    {

        return view('livewire.emploee.add');
    }
}
