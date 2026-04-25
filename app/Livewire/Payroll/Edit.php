<?php

namespace App\Livewire\Payroll;

use App\Models\Payroll;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $payroll;
    public $id ;
    public function update(Request $request , string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->payroll = Payroll::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.payroll.edit');
    }
}
