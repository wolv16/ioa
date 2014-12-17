<?php

class RegistroTallerController extends BaseController {



	public function get_nuevo()
	{
		return View::make('artesano.taller');
	}

public function post_nuevo()
{

$Taller = Taller::create(array(
	'nombre'=> Input::get('taller'), 
	'fechainicio'=> Input::get('fecha1'),
	'fechafin'=> Input::get('fecha2'),
	'maestro'=> Input::get('maestro'))); 
	 
		return View::make('respuestas.tallerresponse')->with('Taller',$Taller);


}}
