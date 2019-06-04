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

Route::get('/', function () {
    return view('welcome');
});

/*
RUTAS CITAS
*/
Route::post('crearCita','CitasController@crearCita');
Route::post('actualizarCita', 'CitasController@actualizarCita');
Route::post('listarCita', 'CitasController@listarCita');
Route::post('eliminarCita', 'CitasController@eliminarCita');
Route::get('listarCita', 'CitasController@listarCita');

/*
RUTAS PACIENTE
*/
// Route::post('crearCita','CitasController@crearCita');
// Route::post('editarCita', 'CitasController@editarCita');
// Route::post('listarCita', 'CitasController@listarCita');
// Route::post('eliminarCita', 'CitasController@eliminarCita');
Route::get('listaPaciente', 'PacienteController@listaPaciente');


/*RUTAS ODONTÓLOGO
*/
Route::get('listaOdontologo', 'OdontologoController@listaOdontologo');