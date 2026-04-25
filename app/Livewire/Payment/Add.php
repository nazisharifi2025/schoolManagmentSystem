<?php

namespace App\Livewire\Payment;

use App\Models\payment;
use Illuminate\Http\Request;
use Livewire\Component;

class Add extends Component
{
    public $payment;

    public function mount(){
        $this->payment = new payment();
    }
    public function create(Request $request){
        $request->validate([
        "payment_mount"=> "required|integer",
        "emploee_id"=> "required|integer",
        "payroll_id"=> "required|integer",
        ]);
        $this->payment->create([
            "payment_mount"=> $request->payment_mount,
        "emploee_id" => $request->emploee_id,
        "payroll_id"=> $request->payroll_id,
        ]);
    }
    public function render()
    {
        return view('livewire.payment.add');
    }
}
