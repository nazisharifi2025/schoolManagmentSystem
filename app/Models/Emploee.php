<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emploee extends Model
{
    protected $fillable = [
        "firstName",
        "LastName",
        "tazkera",
        "gender",
        "email",
        "phone",
        "designation_id"
    ];
    public function designations(){
        return $this->belongsTo(Designation::class);
    }
    public function Salarie(){
        return $this->hasMany(salarie::class);
    }
    public function Payment(){
        return $this->hasMany(payment::class);
    }
    public function contract(){
        return $this->hasMany(Contract::class);
    }
}
