<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = [
    	'cod_persona',
        'cod_area',
        'cod_sede',
        'cargo',
        'estado',
    ];

    public function persona()
    {
       return $this->belongsTo(Persona::class,'cod_persona');
    }

    public function sede()
    {
       return $this->belongsTo(Sede::class,'cod_sede');
    }

    public function area()
    {
      return $this->belongsTo(Area::class,'cod_area');
    }

    public function JefeDepartamento()
    {
       return $this->hasOne(Departamento::class,'cod_jefe','id');
    }

    public function CoordinadorArea()
    {
       return $this->hasOne(Area::class,'cod_coordinador','id');
    }

    public function CoordinadorPrograma()
    {
       return $this->hasOne(Programa::class,'cod_coordinador','id');
    }

    public function CoordinadorCarrera()
    {
       return $this->hasOne(Carrera::class,'cod_coordinador','id');
    }


}
