<?php

namespace App\Livewire\Payroll;

use App\Models\Payroll;
use Illuminate\Http\Request;
use Livewire\Component;

use function Symfony\Component\Clock\now;

class Add extends Component
{
    public $payroll;
    public function mount(){
        $this->payroll = new Payroll();
    }
    public function create(Request $request){
        $request->validate([
             "year"=>"required|date",
        "month"=> "required|date",
        "school_id"=> "required|integer",
        ]);
        $this->payroll->create([
            "Year"=> $request->year,
            "month"=> $request->month,
            "school_id"=> $request->school_id,
        ]);
    }
    public function render()
    {
        return view('livewire.payroll.add');
    }
}
