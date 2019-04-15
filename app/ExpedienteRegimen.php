<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpedienteRegimen extends Model
{
    protected $fillable = [
        'cod_expediente', 
        'cod_asignatura', 
        'fecha_fin', 
        'tipo', 
        'estado'
    ];

    public function expediente()
    {
       return $this->belongsTo(Expediente::class,'cod_expediente');
    }

    public function asignatura()
    {
       return $this->belongsTo(Asignatura::class,'cod_asignatura');
    }
}
