<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salarie extends Model
{
    protected $fillable = [
        "gross_salarai",
        "emploee_id",
        "payroll_id",
    ];
    public function payroll(){
        return $this->belongsTo(Payroll::class);
    }
    public function emploee(){
        return $this->belongsTo(Emploee::class);
    }
}
