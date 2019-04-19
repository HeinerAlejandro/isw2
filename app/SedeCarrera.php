<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SedeCarrera extends Model
{
    protected $fillable = [
        'cod_sede', 
        'cod_carrera',
    ];

    public function carrera()
    {
       return $this->belongsTo(Carrera::class,'cod_carrera');
    }

    public function sede()
    {
       return $this->belongsTo(Sede::class,'cod_sede');
    }
}
