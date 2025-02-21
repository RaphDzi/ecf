<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class creneau extends Model
{
    /** @use HasFactory<\Database\Factories\CreneauFactory> */
    use HasFactory;

    //un creneau est attribué à un seul cours
    public function cours()
    {
        return $this->belongsTo(Creneau::class);
    }

    //un creneau est attribué à une ou plusieurs reservations
    public function reservations()
    {
        return $this->belongsToMany(Creneau::class);
    }
}
