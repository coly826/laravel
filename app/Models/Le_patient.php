<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Le_patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'date_naissance', 'adresse', 'telephone', 'historique_medical',
    ];
}
