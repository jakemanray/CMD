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


Auth::routes();
Route::get('/', 'PagesController@inicio')->name('inicio');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('moodleLoad','PagesController@moodleLoad')->name('moodleLoad');
Route::get('moodleDownload','PagesController@moodleDownload')->name('moodleDownload');
Route::get('asesoria','PagesController@asesoria')->name('asesoria');
Route::get('administrador','PagesController@administrador')->name('administrador');

Route::get('perfiles','PagesController@perfiles')->name('perfiles');
Route::post('crearPerfil','PagesController@crearPerfil')->name('profile.crearPerfil');
Route::get('editarPerfil/{id}','PagesController@editarPerfil')->name('profile.editarPerfil');
Route::put('updatePerfil/{id}','PagesController@updatePerfil')->name('profile.updatePerfil');
Route::delete('deletePerfil/{id}','PagesController@deletePerfil')->name('profile.deletePerfil');

Route::get('roles','PagesController@roles')->name('roles');
Route::post('crearRol','PagesController@crearRol')->name('profile.crearRol');
Route::get('editarRol/{id}','PagesController@editarRol')->name('profile.editarRol');
Route::put('updateRol/{id}','PagesController@updateRol')->name('profile.updateRol');
Route::delete('deleteRol/{id}','PagesController@deleteRol')->name('profile.deleteRol');

Route::get('escalafon','PagesController@escalafon')->name('escalafon');
Route::post('/','PagesController@crearEscalafon')->name('profile.crearEscalafon');
Route::get('editarEscalafon/{id}','PagesController@editarEscalafon')->name('profile.editarEscalafon');
Route::put('updateEscalafon/{id}','PagesController@updateEscalafon')->name('profile.updateEscalafon');
Route::delete('deleteEscalafon/{id}','PagesController@deleteEscalafon')->name('profile.deleteEscalafon');

Route::get('docente','PagesController@docente')->name('docente');
Route::post('crearDocente','PagesController@crearDocente')->name('profile.crearDocente');
Route::get('editarDocente/{id}','PagesController@editarDocente')->name('profile.editarDocente');
Route::put('updateDocente/{id}','PagesController@updateDocente')->name('profile.updateDocente');
Route::delete('deleteDocente/{id}','PagesController@deleteDocente')->name('profile.deleteDocente');


Route::get('facultad','PagesController@facultad')->name('facultad');
Route::post('crearFacultad','PagesController@crearFacultad')->name('profile.crearFacultad');
Route::get('editarFacultad/{id}','PagesController@editarFacultad')->name('profile.editarFacultad');
Route::put('updateFacultad/{id}','PagesController@updateFacultad')->name('profile.updateFacultad');
Route::delete('deleteFacultad/{id}','PagesController@deleteFacultad')->name('profile.deleteFacultad');

Route::get('departamento','PagesController@departamento')->name('departamento');
Route::post('crearDepartamento','PagesController@crearDepartamento')->name('profile.crearDepartamento');

Route::get('carrera','PagesController@carrera')->name('carrera');

Route::get('planificacionModulo','PagesController@planificacionModulo')->name('planificacionModulo');
Route::post('crearModulo','PagesController@crearModulo')->name('profile.crearModulo');
Route::get('editarModulo/{id}','PagesController@editarModulo')->name('profile.editarModulo');
Route::put('updateModulo/{id}','PagesController@updateModulo')->name('profile.updateModulo');
Route::delete('deleteModulo/{id}','PagesController@deleteModulo')->name('profile.deleteModulo');

Route::get('planificacionNivel','PagesController@planificacionNivel')->name('planificacionNivel');
Route::post('crearNivel','PagesController@crearNivel')->name('profile.crearNivel');
Route::get('editarNivel/{id}','PagesController@editarNivel')->name('profile.editarNivel');
Route::put('updateNivel/{id}','PagesController@updateNivel')->name('profile.updateNivel');
Route::delete('deleteNivel/{id}','PagesController@deleteNivel')->name('profile.deleteNivel');

Route::get('usuarios','PagesController@usuarios')->name('usuarios');
Route::get('cambioContraseña','PagesController@cambioContraseña')->name('cambioContraseña');
Route::post('updatePassword','PagesController@updatePassword')->name('updatePassword');
Route::get('editarUsuarios/{id}','PagesController@editarUsuarios')->name('profile.editarUsuarios');

Route::get('planificacionCapacitacion','PagesController@planificacionCapacitacion')->name('planificacionCapacitacion');
Route::post('crearPlanCapacitacion','PagesController@crearPlanCapacitacion')->name('profile.crearPlanCapacitacion');
Route::get('editarPlanCapacitacion/{id}','PagesController@editarPlanCapacitacion')->name('profile.editarPlanCapacitacion');
Route::put('updatePlanCapacitacion/{id}','PagesController@updatePlanCapacitacion')->name('profile.updatePlanCapacitacion');
Route::delete('deletePlanCapacitacion/{id}','PagesController@deletePlanCapacitacion')->name('profile.deletePlanCapacitacion');

Route::get('asignarCapacitacion','PagesController@asignarCapacitacion')->name('asignarCapacitacion');
Route::get('asignarDocenteCapacitacion','PagesController@asignarDocenteCapacitacion')->name('asignarDocenteCapacitacion');
Route::get('asignarAsistenciaCapacitacion','PagesController@asignarAsistenciaCapacitacion')->name('asignarAsistenciaCapacitacion');

Route::post('crearAsignarCapacitacion','PagesController@crearAsignarCapacitacion')->name('profile.crearAsignarCapacitacion');
