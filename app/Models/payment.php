<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
        "payment_mount",
        "emploee_id",
        "payroll_id",
    ];  
}
