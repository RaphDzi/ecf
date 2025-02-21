<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
    /** @use HasFactory<\Database\Factories\CourFactory> */
    use HasFactory;

        // un cours peut avoir plusieurs creneau
        public function creneaux()
        {
            return $this->hasMany(Creneau::class);
        }
}
