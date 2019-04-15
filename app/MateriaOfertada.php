<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaOfertada extends Model
{
    protected $fillable = [
        'num_seccion',
        'cod_asignatura',
        'cod_profesor',
        'cod_lapso',
        'cupo_maximo', 
        'cupo_disponible', 
    ];

    public function lapso()
    {
       return $this->belongsTo(LapsoAcademico::class,'cod_lapso');
    }

    public function asignatura()
    {
       return $this->belongsTo(Asignatura::class,'cod_asignatura');
    }

	public function profesor()
    {
       return $this->belongsTo(Profesor::class,'cod_profesor');
    }

    public function horarios()
    {
       return $this->hasMany(HorarioMaterias::class,'cod_materia');
    }

    public function inscripciones()
    {
       return $this->hasMany(Inscripcion::class,'cod_expediente');
    }
}
