<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'doctor_name','appointment_date',
    ];

    /**
     * Les attributs cachés pour les tableaux.
     */

}


