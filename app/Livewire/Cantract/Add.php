<?php

namespace App\Livewire\Cantract;

use App\Models\Contract;
use Illuminate\Http\Request;
use Livewire\Component;

use function Symfony\Component\Clock\now;

class Add extends Component
{
    public $cantract;
    public function mount(){
        $this->cantract = new Contract();
    }
    public function create(Request $request){
        $request->validate([
             "start_date"=> "required|date",
        "end_date" =>"required|date",
        "emploee_id"=> "required|integer",
        "designation_id"=> "required|integer",
        "hire_type"=>"nullable|string"
        ]);
        $this->cantract->create([
             "start_date"=> now(),
        "end_date"=> $request->endDate,
        "emploee_id"=> $request->emploee_id,
        "designation_id"=> $request->designation_id,
        "hire_type" => $request->hire_type
        ]);
    }
    public function render()
    {
        return view('livewire.cantract.add');
    }
}
