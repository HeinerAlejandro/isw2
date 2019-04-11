<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $fillable = [
        'usuario', 
        'nombres', 
        'apellidos', 
        'cedula',
        'telefono',
        'fecha_nacimiento',
        'fecha_ingreso',
        'sexo',
        'tipo'
    ];
}
