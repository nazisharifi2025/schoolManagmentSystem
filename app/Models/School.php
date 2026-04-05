<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        "name",
        "whatsapp-link",
    ];
    public function user(){
        return $this->belongsToMany(User::class , "users");
    }
    public function departmint(){
        return $this->hasMany(departmint::class);
    }
    public function desicnations(){
        return $this->through("departmint")->has("desicnations");
    }
    public function payroll(){
        return $this->hasMany(Payroll::class);
    }
}
