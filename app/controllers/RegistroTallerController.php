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
	'fecha'=> Input::get('fecha'),
	'maestro'=> Input::get('maestro'))); 
	 
	

}}
