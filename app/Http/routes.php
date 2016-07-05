<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {    
//     return view('index');
// });

Route::get('/', 'FrontController@index');
Route::get('principal', 'FrontController@principal');
Route::get('log', 'FrontController@log');

// Route::get('header',function(){
// 	return view('prueba');
// });


//controladores RESTful

Route::resource('login','LoginController');
Route::get('logout','LoginController@logout');
Route::resource('usuario', 'UsuarioController');
Route::resource('evento', 'EventoController');

Route::resource('tipoPersona', 'TipoPersonaController');
Route::resource('tipoDocumento', 'TipoDocumentoController');
Route::resource('persona', 'PersonaController');
Route::resource('ingreso', 'IngresoController');
Route::resource('ciudad', 'CiudadController');
Route::resource('nivelAcademico', 'NivelAcademicoController');
Route::resource('talento', 'TalentoController');
Route::resource('recurso', 'RecursoController');
Route::resource('infraestructura', 'InfraestructuraController');
Route::resource('detInfraestructuraPersona', 'DetInfraestructuraPersonaController');
Route::resource('tipoProyecto', 'TipoProyectoController');
Route::resource('estadoProyecto', 'EstadoProyectoController');
Route::resource('fechaEntrenamiento', 'FechaEntrenamientoController');
Route::resource('tipoGestor', 'TipoGestorController');
Route::resource('lineaTecnologica', 'LineaTecnologicaController');
Route::resource('gestor', 'GestorController');
Route::resource('servicio', 'ServicioController');



Route::resource('detEventoPersona', 'DetEventoPersonaController');
Route::resource('areaConocimiento', 'AreaConocimientoController');
Route::resource('clasificacion', 'ClasificacionController');
Route::resource('proyecto', 'ProyectoController');
Route::resource('entrenamiento', 'EntrenamientoController');
Route::resource('detPersonaProyecto', 'DetPersonaProyController');





  