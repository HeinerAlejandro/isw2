<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
	protected $fillable = [
    	'nombre',
        'cod_area',
        'valor_uc',
    ];

    public function area()
    {
       return $this->belongsTo(Area::class,'cod_area');
    }

    public function regimenes()
    {
       return $this->hasMany(ExpedienteRegimen::class,'cod_asignatura');
    }

    public function DetallePensum()
    {
       return $this->hasMany(DetallePensum::class,'cod_asignatura');
    }

    public function PrelacionesOtrasAsignaturas()
    {
       return $this->hasMany(PrelacionAsignatura::class,'cod_asignatura');
    }
}
