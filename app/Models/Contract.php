<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        "start_date",
        "end_date",
        "emploee_id",
        "designation_id",
        "hire_type"
    ];
    public function Designation(){
        return $this->belongsTo(Designation::class);
    }
    public function emploee(){
        return $this->belongsTo(Emploee::class);
    }
}
