<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
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
