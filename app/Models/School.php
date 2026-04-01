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
        return $this->belongsTo(User::class , "users");
    }
    public function departmint(){
        return $this->hasMany(departmint::class);
    }
}
