<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return "hola";
});



Route::get('/base',function()
{
	return View::make('layouts.base');
});

Route::get('/base2',function()
{
	return View::make('layouts.baseartesanos');
});


Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('/organizacion', function()
{
    return View::make('artesano.organizacion');
});


Route::get('/personaConcurso', function()
{
    return View::make('artesano.personaConcurso');
});

Route::get('artesano','AltaArtesanoController@get_nuevo');
Route::post('artesano','AltaArtesanoController@post_nuevo');

Route::get('concurso','RegistroConcursoController@get_nuevo');
Route::post('concurso','RegistroConcursoController@post_nuevo');

Route::get('feria','RegistroFeriaController@get_nuevo');
Route::post('feria','RegistroFeriaController@post_nuevo');

Route::get('taller','RegistroTallerController@get_nuevo');
Route::post('taller','RegistroTallerController@post_nuevo');






