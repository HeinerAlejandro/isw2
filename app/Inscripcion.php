<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $fillable = [
        'cod_materia',
        'cod_expediente',
        'estado',
    ];

	public function materia()
    {
       return $this->belongsTo(MateriaOfertada::class,'cod_materia');
    }

    public function expediente()
    {
       return $this->belongsTo(Expediente::class,'cod_expediente');
    }

    public function acta()
    {
       return $this->hasOne(ActaInscripcion::class,'cod_inscripcion','id');
    }
}
