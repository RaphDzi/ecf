<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    /** @use HasFactory<\Database\Factories\CoursFactory> */
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
    ];

    // un cours peut avoir plusieurs creneau
    public function creneaux()
    {
        return $this->hasMany(Creneau::class);
    }
}
