<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LapsoAcademico extends Model
{
    protected $fillable = [ 
        'descripcion', 
        'fecha_inicio', 
        'fecha_fin',
        'costo',
        'estado'
    ];

    public function regimenes()
    {
       return $this->hasMany(ExpedienteRegimen::class,'cod_expediente');
    }

	public function FechaInscripciones()
    {
       return $this->hasMany(FechaInscripcion::class,'cod_lapso');
    }
}
