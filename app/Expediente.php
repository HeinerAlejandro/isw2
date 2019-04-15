<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $fillable = [
        'cod_estudiante', 
        'cod_plan', 
        'uc_permitidas', 
        'nivel_estudio', 
        'semestres_cursados',
        'uc_aprobadas',
        'uc_cursadas',
        'indice_academico',
        'estado'
    ];

    public function estudiante()
    {
       return $this->belongsTo(Estudiante::class,'cod_estudiante');
    }

    public function plan()
    {
       return $this->belongsTo(PlanEstudio::class,'cod_plan');
    }

    public function regimenes()
    {
       return $this->hasMany(ExpedienteRegimen::class,'cod_expediente');
    }

    public function inscripciones()
    {
       return $this->hasMany(Inscripcion::class,'cod_expediente');
    }

	public function FechaInscripciones()
    {
       return $this->hasMany(FechaInscripcion::class,'cod_expediente');
    }
}
