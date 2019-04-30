<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth; 
use DB;

class InscripcionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Route::apiResource('expedient', 'ExpedientController');
        
        $user = Auth::user()->persona->estudiante;
        // return $user;

        if($user){//bajado desde el repoo heinmer

            $horariosMaterias = DB::table('horario_materias')
            ->join('materia_ofertadas', 'horario_materias.cod_materia', '=', 'materia_ofertadas.codigo')
            ->join('asignatura', 'materia_ofertadas.cod_asignatura', '=', 'asignatura.codigo')
            ->join('detalle_pensum','asignatura.codigo','=','detalle_pensum.cod_asignatura')
            ->join('expediente_regimen', 'asignatura.codigo' , '=', 'expediente_regimen.cod_asignatura')
            ->join('expediente','expediente.codigo','=','expediente_regimen.cod_expediente')
            ->join('profesor','profesor.codigo','=','materias_ofertadas.cod_profesor')
            ->where('detalle_pensum.nivel', '<=' , $user->expedientes->nivel_estudio)//'estudiante.expediente.nivel_estudio'
            ->where('expediente_regimen.estado' , '<>', 'en curso') 
            ->where('materias_ofertadas.cupo_disponible','>',0)
            ->where('expediente.cod_estudiante','=',$user->id)
            ->get();
        
            return response($horariosMaterias, 200);
        }
        $message = "No se ha encontrado registros existentes, o no ha sido posible la conexion";


        return response($message, 401);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return 'sin funcionar aun';
        $horarioMaterias = DB::table('horario_materias')
            ->join('materia_ofertadas', 'materia_ofertadas.codigo', '=', 'horario.cod_materia')
            ->join('asignatura', 'asignatura.codigo ', '=', 'materias_ofertadas.cod_asignatura')
            ->join('inscripcion','inscripcion.cod_materia_ofertada','=','materias_ofertadas.codigo')
            ->join('expediente', 'expediente.codigo' , '=', 'inscripcion.cod_expediente')
            ->select('materias_ofertadas.cupo_disponible', 'horario.hora_inicio', 'horario.hora_fin',
                    'expediente.unidades_cursadas', 'asignatura.valor_UC')

            ->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
