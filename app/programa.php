<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
	protected $fillable = [
    	'nombre'
        'profesor_id',
    ];

    public function coordinador()
	{
	   return $this->belongsTo(Profesor::class);
	}

}
