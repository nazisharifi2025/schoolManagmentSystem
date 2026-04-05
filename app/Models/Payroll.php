<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $fillable = [
        "year",
        "month",
        "school_id",
    ];
    public function school(){
        return $this->belongsTo(School::class);
    } 
    public function payment(){
        return $this->hasMany(payment::class);
    }
    public function salarie(){
        return $this->hasMany(salarie::class);
    }
}
