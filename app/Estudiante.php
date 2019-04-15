<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
    	'cod_persona',
        'saldo',
        'estado',
    ];

    public function persona()
    {
       return $this->belongsTo(Persona::class,'cod_persona');
    }
}
