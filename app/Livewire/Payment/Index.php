<?php

namespace App\Livewire\Payment;

use Livewire\Component;

class Index extends Component
{
    public $payment;
    public function mount(){
        
    }
    public function render()
    {
        return view('livewire.payment.index');
    }
}
