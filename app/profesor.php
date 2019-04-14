<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
        protected $fillable = [
    	'persona'
        'nombres', 
        'saldo',
        'estado',
    ];
}
