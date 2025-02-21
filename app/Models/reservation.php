<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;


    //une reservation est attribué à un seul user
    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    //une reservation est attribué à un seul creneau
    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }
}
