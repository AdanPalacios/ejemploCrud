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
/*
Route::get('/', function () {
    return view('welcome');
 });*/

Route::get('/registro-carrera', 'CarreraController@crearCarrera')->name('crearCarrera');
Route::post('/registro-carrera', 'CarreraController@crearCarreraPost')->name('crearCarreraPost');
Route::get('/', 'CarreraController@listaCarrera')->name('listaCarrera');
Route::get('/editar-carrera/{carreras_id}', 'CarreraController@editarCarrera')->name('editarCarrera');
Route::post('/editar-carrera/{carreras_id}', 'CarreraController@editarCarreraPost')->name('editarCarreraPost');
Route::post('carrera/{id}', 'CarreraController@eliminarCarrera')->name('eliminarCarrera');

Route::get('/grupo', 'GrupoController@listaGrupo')->name('listaGrupo');
Route::get('/registro-grupo', 'GrupoController@crearGrupo')->name('crearGrupo');
Route::post('/registro-grupo', 'GrupoController@crearGrupoPost')->name('crearGrupoPost');
Route::get('/editar-grupo/{grupos_id}', 'GrupoController@editarGrupo')->name('editarGrupo');
Route::post('/editar-grupo/{grupos_id}', 'GrupoController@editarGrupoPost')->name('editarGrupoPost');
Route::post('grupo/{id}', 'GrupoController@eliminarGrupo')->name('eliminarGrupo');

Route::get('/alumno', 'AlumnoController@listaAlumno')->name('listaAlumno');
Route::get('/registro-alumno', 'AlumnoController@crearAlumno')->name('crearAlumno');
Route::post('/registro-alumno', 'AlumnoController@crearAlumnoPost')->name('crearAlumnoPost');
Route::get('/editar-alumno/{alumnos_id}', 'AlumnoController@editarAlumno')->name('editarAlumno');
Route::post('/editar-alumno/{alumnos_id}', 'AlumnoController@editarAlumnoPost')->name('editarAlumnoPost');
Route::post('alumno/{id}', 'AlumnoController@eliminarAlumno')->name('eliminarAlumno');