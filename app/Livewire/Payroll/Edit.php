<?php

namespace App\Livewire\Payroll;

use Livewire\Component;

class Edit extends Component
{
    public $payroll;
    public $id ;
    public function update(Request $request , string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->payroll = payroll::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.payroll.edit');
    }
}
