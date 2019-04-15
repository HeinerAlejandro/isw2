<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nombre', 
        'cod_jefe',
    ];

    public function coordinador()
    {
       return $this->belongsTo(Profesor::class,'cod_coordinador');
    }

    public function areas()
    {
       return $this->hasMany(Area::class,'cod_departamento');
    }

    public function carreras()
    {
       return $this->hasMany(Carrera::class,'cod_departamento');
    }

}
