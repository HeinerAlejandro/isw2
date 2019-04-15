<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FechaInscripcion extends Model
{
    protected $fillable = [
        'cod_expediente',
        'cod_lapso',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function expediente()
    {
       return $this->belongsTo(Expediente::class,'cod_expediente');
    }

    public function lapso()
    {
       return $this->belongsTo(LapsoAcademico::class,'cod_lapso');
    }

}
