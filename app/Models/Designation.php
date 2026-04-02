<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = [
        "name",
        "department_id"
    ];
    public function departmint(){
        return $this->belongsTo(departmint::class);
    }
    public function contract(){
        return $this->belongsTo(Contract::class);
    }
    public function emploee(){
        return $this->belongsTo(Emploee::class);
    }
}
