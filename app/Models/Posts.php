<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Posts as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs qui peuvent être remplis en masse.
     */
    protected $fillable = [
        'nom', 'prenom', 'email', 'password',
    ];

    /**
     * Les attributs cachés pour les tableaux.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
