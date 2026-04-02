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
        return $this->hasMany(Designation::class);
    }
    
}
