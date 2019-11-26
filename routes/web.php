<?php
use App\Exports\ServicioExport;
use App\Exports\UsersExport;
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
//Route::get('notification', 'HomeController@notification');


//route::post('/recibeRun', 'pruebas@validarExisteUsuario');









/*inicio permisos*/
route::get('/ingresar', 'PermisosController@registrapermiso');
route::post('/permisos_administrativos', 'PermisosController@ingresarPermiso');
route::post('/guardar_permiso','PermisosController@guardarpermisos');


/*fin permisos*/


