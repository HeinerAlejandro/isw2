<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaInscripcion extends Model
{
    protected $fillable = [
        'cod_inscripcion', 
        'calificacion', 
        'estado'
    ];

    public function Inscripcion()
    {
       return $this->belongsTo(Inscripcion::class,'cod_inscripcion');
    }

}
