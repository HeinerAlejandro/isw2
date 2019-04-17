<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
	protected $fillable = [
    	'nombre',
        'cod_coordinador',
    ];

    public function coordinador()
	{
	   return $this->belongsTo(Profesor::class,'cod_coordinador');
	}

    public function carreras()
    {
       return $this->hasMany(Carrera::class,'cod_programa');
    }

    public function lapsos()
    {
       return $this->hasMany(LapsoAcademico::class,'cod_programa');
    }
}
