<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;


    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }

    public function creneaux()
    {
        return $this->belongsTo(Creneau::class, 'creneau_id');
    }
}
