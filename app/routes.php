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

Route::get('/inicio', function()
{
	return View::make("artesano.inicio");
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





Route::get('artesano','AltaArtesanoController@get_nuevo');
Route::post('artesano/registro','AltaArtesanoController@post_nuevo');

Route::get('concurso','RegistroConcursoController@get_nuevo');
Route::post('concurso','RegistroConcursoController@post_nuevo');

Route::get('feria','RegistroFeriaController@get_nuevo');
Route::post('feria','RegistroFeriaController@post_nuevo');

Route::get('taller','RegistroTallerController@get_nuevo');
Route::post('taller','RegistroTallerController@post_nuevo');

Route::get('organizacion','RegistroOrganizacionController@get_nuevo');
Route::post('organizacion','RegistroOrganizacionController@post_nuevo');

Route::post('buscorg','AltaArtesanoController@post_buscorg');
Route::get('por','AltaArtesanoController@get_nuevopor');
Route::post('por/registro','AltaArtesanoController@post_nuevopor');

Route::post('artesano/municipio','selectmunicipiosController@post_mun');

Route::get('editarArtesano','EditarArtesanoController@editar');
Route::post('editarArtesano','EditarArtesanoController@buscar');

Route::post('buscaConcurso','RegistroenConcursoController@buscaConcurso');

Route::get('/personaConcurso','RegistroenConcursoController@get_nuevo');
Route::post('curp','RegistroenConcursoController@post_Curp');
Route::post('personaConcurso','RegistroenConcursoController@post_nuevo');
Route::post('buscaconcursante','RegistroenConcursoController@post_buscaconcursante');
Route::post('personaConcurso2','RegistroenConcursoController@post_personaconcursos');


Route::get('editarEventos','editarEventoController@get_nuevo');

Route::get('ArtesanoEnFeria','ArtesanoEnFeriaController@get_ArtesanoEnFeria');
Route::post('ArtesanoEnFeria','ArtesanoEnFeriaController@buscar');





