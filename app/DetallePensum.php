<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePensum extends Model
{
    protected $fillable = [
        'cod_plan', 
        'cod_asignatura',
        'semestre',
        'nivel',
    ];

    public function plan()
    {
       return $this->belongsTo(PlanEstudio::class,'cod_plan');
    }

    public function asignatura()
    {
       return $this->belongsTo(Asignatura::class,'cod_asignatura');
    }

    public function prelaciones()
    {
       return $this->hasMany(PrelacionAsignatura::class,'cod_detalle');
    }
}
