<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
    	'cod_departamento',
        'nombre', 
        'cod_coordinador',
    ];

    public function departamento()
    {
       return $this->belongsTo(Departamento::class,'cod_departamento');
    }

    public function coordinador()
    {
       return $this->belongsTo(Profesor::class,'cod_coordinador');
    }

    public function profesores()
    {
       return $this->hasMany(Profesor::class,'cod_area');
    }

    public function asignaturas()
    {
       return $this->hasMany(Asignatura::class,'cod_area');
    }
}
