<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{

	protected $table = "personas";

    protected $fillable = [
        'user_id', 
        'nombres', 
        'apellidos', 
        'cedula',
        'telefono',
        'fecha_nacimiento',
        'fecha_ingreso',
        'sexo',
        'tipo'
    ];

    public function users() {
    	return $this->hasOne(User::Class);
    }

    // $usuario = new User();




    // $usuario->id


    // $usuario_id = "1"

    // $persona = new persona();

    // $persona->nombre = hadfs;

    // $persona->users()->save($usuario->id)
}
