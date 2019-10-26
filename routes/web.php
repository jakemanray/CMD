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

Auth::routes();

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

Route::get('escalafon','PagesController@escalafon')->name('escalafon');
Route::post('/','PagesController@crearEscalafon')->name('profile.crearEscalafon');
Route::get('editarEscalafon/{id}','PagesController@editarEscalafon')->name('profile.editarEscalafon');
Route::put('updateEscalafon/{id}','PagesController@updateEscalafon')->name('profile.updateEscalafon');
Route::delete('deleteEscalafon/{id}','PagesController@deleteEscalafon')->name('profile.deleteEscalafon');
