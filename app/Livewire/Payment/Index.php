<?php

namespace App\Livewire\Payment;

use App\Models\payment;
use Livewire\Component;

class Index extends Component
{
    public $payment;
    public function mount(){
        $this->payment = payment::all();
    }
    public function render()
    {
        return view('livewire.payment.index');
    }
}
