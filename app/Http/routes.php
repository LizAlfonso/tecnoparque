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

Route::get('/', 'FrontController@index');
Route::get('principal', 'FrontController@principal');
Route::get('log', 'FrontController@log');

Route::get('asistencia/{idDetEventoPersona}', ['as' => 'asistencia.index', 'uses' => 'DetEventoPersonaController@index']);

//controladores RESTful

Route::resource('login','LoginController'); 
Route::get('logout','LoginController@logout');
Route::resource('usuario', 'UsuarioController');
Route::resource('servicio', 'ServicioController');
Route::resource('evento', 'EventoController');
Route::resource('tipoDocumento', 'TipoDocumentoController');
Route::resource('tipoPersona', 'TipoPersonaController');
Route::resource('centroFormacion','CentroFormacionController');
Route::resource('persona', 'PersonaController');
Route::resource('asistencia', 'DetEventoPersonaController', ['except' => ['index']]);

Route::resource('ingreso', 'IngresoController');
Route::post('pruebaAjax','PruebaAjaxController@auto');

Route::resource('lineaTecnologica', 'LineaTecnologicaController');

// Route::resource('mail','MailController');
Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');
Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');

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
Route::resource('gestor', 'GestorController');
Route::resource('areaConocimiento', 'AreaConocimientoController');
Route::resource('clasificacion', 'ClasificacionController');
Route::resource('proyecto', 'ProyectoController');
Route::resource('entrenamiento', 'EntrenamientoController');
Route::resource('detPersonaProyecto', 'DetPersonaProyController');





  