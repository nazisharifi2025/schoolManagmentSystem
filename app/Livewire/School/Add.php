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
    public function create(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "whatsapp_link"=> " required|string|min:3"
        ]);
        $this->school->create([
            "name"=> $request->name,
            "whatsapp_link"=> $request->whatsapp_link,
        ]);
    }
    public function render()
    {
        return view('livewire.school.add');
    }
}
