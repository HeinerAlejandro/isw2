<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioMaterias extends Model
{
    protected $fillable = [
        'cod_materia',
        'sede',
        'dia',
        'hora_inicio',
        'hora_fin',
        'aula',
    ];

	public function materia()
    {
       return $this->belongsTo(MateriaOfertada::class,'cod_materia');
    }

}
