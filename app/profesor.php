<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
        protected $fillable = [
    	'persona'
        'nombres', 
        'saldo',
        'estado',
    ];}
