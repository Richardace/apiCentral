<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';

    protected $fillable = [
        'nombre', 'tipo_mascota', 'raza', 'sexo', 'edad'
    ];
}
