<?php

namespace App\Livewire\Payroll;

use Livewire\Component;

class Add extends Component
{
    public $payroll;
    public function mount(){
        $this->payroll = new payroll();
    }
    public function create(Request $request){

    }
    public function render()
    {
        return view('livewire.payroll.add');
    }
}
