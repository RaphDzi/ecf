<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    /** @use HasFactory<\Database\Factories\UtilisateurFactory> */
    use HasFactory;

    //un user fait une ou plusieurs reservations
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }
}
