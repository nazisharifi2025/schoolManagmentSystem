<?php

namespace App\Livewire\Payment;

use App\Models\payment;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $paymentData;
    public function update(Request $request , string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->paymentData = payment::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.payment.edit');
    }
}
