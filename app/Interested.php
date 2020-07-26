<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    protected $fillable = [
        'nombre', 'dni', 'titulo', 'telefono', 'email', 'career_id'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class); //Interesado pertenece a una carrera
    }
}

