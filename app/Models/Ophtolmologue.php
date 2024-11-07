<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ophtolmologue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'doctor_name','appointment_date',
    ];

}
