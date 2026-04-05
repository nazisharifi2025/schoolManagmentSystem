<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departmint extends Model
{
    protected $fillable = [
        "name",
        "school_id"
    ];
    public function desicnations(){
        return $this->hasMany(Designation::class);
    }
    public function school(){
        return $this->belongsTo(School::class);
    }
    
}
