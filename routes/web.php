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


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::resource('areaconocimiento', 'AreaConocimientoController', ['except' => ['show']]);
   // Route::get('curso/niveles/', 'CursoController@showniveles');
    Route::resource('curso', 'CursoController', ['except' => ['show']]);
    Route::resource('estudiante', 'EstudianteController', ['except' => ['show']]);
    Route::resource('profesor', 'ProfesorController', ['except' => ['show']]);
   // Route::get('curso/niveles/', 'CursoController@showniveles');
   // Route::post('curso/{curso}/nivel', 'CursoController@storenivel');
    //Route::resource('nivel', 'NivelController', ['except' => ['show']]);
    Route::get('nivel/{curso}/niveles', 'NivelController@index')->name('nivel.index');
    Route::get('capitulo/{nivel}/capitulos', 'CapituloController@index')->name('capitulo.index');
});

