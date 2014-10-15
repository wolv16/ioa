<?php

class AltaArtesanoController extends BaseController {



	public function get_nuevo()
	{
		return View::make('artesano.registroArtesano');
	}

	public function post_nuevo()
	{
	///////////////////////////////////////////////////Artesano
	$personaArtesano = Persona::create(array(
		'nombre'=> Input::get('nombre'),
		'curp' => Input::get('curp'),
		'sexo'=> Input::get('sexo'), 
		/*'cuis'=> Input::get('cuis'),*/ 
		'cp'=> Input::get('cp'), 
		'fecha'=> Input::get('fechanace'), 
		'telefono'=> Input::get('tel'), 
		'domicilio'=> Input::get('domicilio'), 
		'lada'=> Input::get('lada'), 
		'observaciones'=> Input::get('observ'), 
		'fechanacimiento'=> Input::get('fechanace'), 
		'grupoetnico_id'=> Input::get('grupoetnico'), 
		'localidad_id'=> Input::get('localidad'), 
		'rama_id'=> Input::get('rama')));

	$artesano = Artesano::create(array(
		'persona_id' => $personaArtesano->id,
	    'ife'=> Input::get('ife'),
		'RFC' => Input::get('RFC'),
		'estadocivil' => Input::get('civil'),
		'fecharegistro' => date('Y-m-d'),
		'lugarcompra' => Input::get('estadocivil'),
		'taller' => Input::get('taller'),
		'tipotelefono' => Input::get('tipoTel'),
		));


	}

	public function post_buscorg(){
		$nombre = Input::get('nombreorg');
		$telefono = Input::get('telmun');

		$comite = Comite::whereHas('organizacion',function($q) use ($nombre,$telefono){ 
			$q->where('nombre','like',$nombre.'%','and')
			->where('telmunicipio','=',$telefono);
		})->get();
		
		return Response::json($comite);
		

		
	}
}
