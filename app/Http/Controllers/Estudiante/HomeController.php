<?php

namespace App\Http\Controllers\Estudiante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('estudiante.home');
    }

    /**
     * datos personales de un estudiante
     *
     * 
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {

        $user = Auth::user()->persona;
        //$credentials = request(['id']);
        $personalData = DB::table('personas')
            ->where('id', '=' , $user->id )//
            ->get();
        
        if ( !$personalData) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return $personalData;
        //return $this->respondWithPersonalData($personalData);
        // return response()->json([
        //     'nombre' => "ejemplo",
        // ]);

    }

    /**
     * Get the token array structure.
     *
     * 
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function academicData(){

        if($user = Auth::user()->persona){

            $horariosMaterias = DB::table('estudiantes')
            ->join('expedientes', 'expedientes.cod_estudiante', '=', 'estudiantes.id')
            ->join('sedes', 'sedes.id', '=', 'expedientes.cod_sede')
            ->join('carreras','carreras.cod_sedes','=','sedes.id')
            ->where('estudiantes.id','=',$user->id)
            ->select('expedientes.uc_aprobadas', 'expedientes.uc_cursadas', 'expedientes.nivel_estudio',
                    'expedientes.indice_academico','expedientes.estado','carreras.nombre')//falta acomodar al profe
            ->get();
        
        }
        
        return response()->json(['error' => 'Unauthorized'], 401);


    }    


    /**
     * Get the token array structure.
     *
     * @param string $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithPersonalData($data)
    {
        return response()->json([
            'nombre' => $data[0]->nombres,
            'apellidos' => $data[0]->apellidos,
            'cedla' => $data[0]->cedula,
            'sexo' => $data[0]->sexo,
            // 'user' => auth()->user(),
        ]);
    }
}
