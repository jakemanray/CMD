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
Route::get('moodleLoad',function(){
    return view('moodleLoad');
})->name('moodleLoad');
Route::get('moodleDownload',function(){
    return view('moodleDownload');
})->name('moodleDownload');
Route::get('asesoria',function(){
    return view('asesoria');
})->name('asesoria');
Route::get('administrador',function(){
    return view('administrador');
})->name('administrador');
Route::get('perfiles',function(){
    return view('perfiles');
})->name('perfiles');
/*Route::resource('/users', 'UserController');
Route::get('/users/editar/{id}','UserController@edit')->name('users.editar');
/*Route::get('administrador', 'pageController@administrador')->name('administrador');
Route::get('moodleLoad', 'pageController@moodleLoad')->name('moodleLoad');
Route::get('moodleDownload', 'pageController@moodleDownload')->name('moodleDownload');
Route::get('asesoria', 'pageController@asesoria')->name('asesoria');*/
