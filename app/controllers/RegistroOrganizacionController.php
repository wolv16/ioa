<?php

class RegistroOrganizacionController extends BaseController {



	public function get_nuevo()
	{
		return View::make('artesano.organizacion');
	}

public function post_nuevo()
{

$Organizacion = Organizacion::create(array(
	'nombre'=> Input::get('nombreOrg'), 
	'telmunicipio'=> Input::get('telMun'),
	)); 

$Comite = Comite::create(array(
		'organizacion_id' => $Organizacion->id));
	 
	

}

	}