<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LapsoAcademico extends Model
{
    protected $fillable = [ 
        'descripcion', 
        'cod_programa', 
        'fecha_inicio', 
        'fecha_fin',
        'costo',
        'estado'
    ];

    public function programa()
    {
       return $this->belongsTo(Programa::class,'cod_programa');
    }

    public function MateriasOfertadas()
    {
       return $this->hasMany(MateriaOfertada::class,'cod_lapso');
    }
    
}
