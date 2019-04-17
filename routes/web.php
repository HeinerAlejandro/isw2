<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//                                               Rutas de autenticacion


// Redirige al home(dashboard)
Route::get('/', function(){
	return Redirect::route('home');
})->name('homeredirection');

// Llamado a las rutas de autenticacion
Auth::routes();

// Permite cerrar sesion en caso que ingrese la url directamente
Route::get('/logout',function(){
	Auth::logout();
   return redirect('/');
})->name('logout-guest');

// Deniega el acceso al registro de usuarios
// Route::get('/register',function(){
//    return redirect('/');
// })->name('register')->middleware('guest');

// Ruta principal al dashboard
Route::get('/home', 'HomeController@index')->name('home');

// Pagina de error
// Route::fallback(function () {
// 	return "Pagina de Error";
// });


Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('usuario', 'UsuarioController');
    Route::resource('estudiante', 'EstudianteController')->only(['index', 'show','update']);
    Route::resource('profesor', 'ProfesorController')->only(['index', 'show','update']);
    Route::resource('area', 'AreaController');
    Route::resource('carrera', 'CarreraController');
    Route::resource('departamento', 'DepartamentoController');
    Route::resource('programa', 'ProgramaController');
    Route::resource('plan', 'PlanEstudioController');
    Route::resource('lapso', 'LapsoAcademicoController');
});