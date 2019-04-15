<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    protected $fillable = [
        'descripcion', 
        'cod_carrera',
        'fecha',
    ];

    public function carrera()
    {
       return $this->belongsTo(Carrera::class,'cod_carrera');
    }

    public function detalles()
    {
       return $this->hasMany(DetallePensum::class,'cod_plan');
    }
}
