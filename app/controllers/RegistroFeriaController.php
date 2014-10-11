<?php

class RegistroFeriaController extends BaseController {



	public function get_nuevo()
	{
		return View::make('artesano.feria');
	}

public function post_nuevo()
{

$Feria = Feria::create(array(
	'nombre'=> Input::get('feria'), 
	'fecha'=> Input::get('fecha'),
	'tipo'=> Input::get('tipo'))); 
	 
	

}}