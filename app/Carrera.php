<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'nombre', 
        'cod_programa',
        'cod_departamento',
        'cod_coordinador',
    ];

    public function programa()
    {
       return $this->belongsTo(Programa::class,'cod_programa');
    }

    public function departamento()
    {
       return $this->belongsTo(Departamento::class,'cod_departamento');
    }

    public function coordinador()
    {
       return $this->belongsTo(Profesor::class,'cod_coordinador');
    }

    public function planes()
    {
       return $this->hasMany(PlanEstudio::class,'cod_carrera');
    }

    public function sedes()
    {
       return $this->hasMany(SedeCarrera::class,'cod_carrera');
    }
}
