<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

	protected $table = "personas";

    protected $fillable = [
        'cod_usuario', 
        'nombres', 
        'apellidos', 
        'cedula',
        'telefono',
        'fecha_nacimiento',
        'fecha_ingreso',
        'sexo',
        'tipo'
    ];

    public function usuario() {
    	return $this->belongsTo(User::Class,'cod_usuario');
    }

    // $usuario = new User();




    // $usuario->id


    // $usuario_id = "1"

    // $persona = new persona();

    // $persona->nombre = hadfs;

    // $persona->users()->save($usuario->id)
}
