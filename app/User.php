<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'documento', 'nombre', 'apellido', 'sexo', 'telefono', 'pregunta_secreta', 'respuesta_secreta', 'corre', 'tipo_usuario', 'estado', 'password'
    ];
}
