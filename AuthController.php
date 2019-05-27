<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login',]]);

    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['usuario', 'password']);
        
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        if (auth()->user()){
            
            $user = ['nombres' => auth()->user()->persona->nombres,
                'apellidos' => auth()->user()->persona->apellidos,
                'cedula' => auth()->user()->persona->cedula,
                'telefono' => auth()->user()->persona->telefono,
                'fecha nacimiento' => auth()->user()->persona->fecha_nacimeinto,
                'fecha_ingreso' => auth()->user()->persona->fecha_ingreso,
                'sexo' => auth()->user()->persona->sexo,
                ];
                
            // switch ($user['tipo']){//$user['tipo'] y cambiar case 'estudiante':
                
            //     case 'estudiante':
                   
            //         return response()->json([
            //                         'usuario' => $user,
            //         ]);
            //         break;
                
            //     case 'profesor':
            //         $user['cargo'] = auth()->user()->persona->profesor->cargo;
            //         $user['estado'] = auth()->user()->persona->profesor->estado;
            //         $user['area'] = auth()->user()->persona->profesor->area->nombre;
            //         $user['sede'] = auth()->user()->persona->profesor->sede->nombre;
            //         $user['sedeDir'] = auth()->user()->persona->profesor->sede->direccion;        
                    
            //         return response()->json([         
            //             'usuario' => $user,                              
            //             ]);
                
            //         break;
                
            //     case 2:
            //         return response()->json(auth()->user());
                
            //         break;

        //}
        return $user;
    }
    return response()->json(['error' => 'Unauthorized'], 401);
    }


    public function payload()
    {
        return response()->json(auth()->payload());
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        // dd($token);
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user(),
            'rol' => auth()->user()->roles()->select('id','name')->get(),
        ]);
    }
}
