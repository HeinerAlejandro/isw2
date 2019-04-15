<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrelacionAsignatura extends Model
{
    protected $fillable = [
        'cod_detalle', 
        'cod_asignatura',
    ];

    public function detalle()
    {
       return $this->belongsTo(DetallePensum::class,'cod_detalle');
    }

    public function AsignaturaPrelacion()
    {
       return $this->belongsTo(Asignatura::class,'cod_asignatura');
    }
}
