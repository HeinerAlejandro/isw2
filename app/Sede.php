<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $fillable = [
        'nombre', 
        'direccion',
    ];

    public function profesores()
    {
       return $this->hasMany(Profesor::class,'cod_sede');
    }

    public function expedientes()
    {
       return $this->hasMany(Expediente::class,'cod_sede');
    }

	public function carreras()
    {
       return $this->hasMany(SedeCarrera::class,'cod_sede');
    }
}
