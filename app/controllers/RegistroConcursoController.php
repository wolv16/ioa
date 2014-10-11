<?php

class RegistroConcursoController extends BaseController {



	public function get_nuevo()
	{
		return View::make('artesano.registroConcurso');
	}

public function post_nuevo()
{

$Concurso = Concurso::create(array(
	'nombre'=> Input::get('concurso'), 
	'fecha'=> Input::get('fecha'),
	'nivel'=> Input::get('nivel'))); 
	 
	

}}