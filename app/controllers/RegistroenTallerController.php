<?php
class RegistroenTallerController extends BaseController {

public function get_nuevo()
	{
		$talleres = Taller::where('fechafin','>',date('Y-m-d'))
		->orderBy('fechafin','asc')
		->get();
		return View::make('artesano.ArtesanoEnTaller')->with('talleres',$talleres);
		
	}
	public function post_buscaconcursante(){
		$nombre = Input::get('artesanombre');
		$paterno = Input::get('artesapaterno');
		$materno = Input::get('artesamaterno');
		$fecha= Input::get('fechanace');

		$persona = Persona::where('nombre','like','%'.$nombre.'%','and')
		->where('nombre','like','%'.$paterno.'%','and')
		->where('nombre','like','%'.$materno.'%')
		->where('fechanacimiento','=',$fecha)->first();
		if($persona){
			$persona->artesano;
			return Response::json($persona);
		}
		else
			return Response::json(array('error'=>true));
	}
	public function post_personaconcursos(){
		if(Input::get('idartesano') == "")
			$objt = Persona::find(Input::get('idpersona'));
		else
			$objt = Artesano::find(Input::get('idartesano'));

		if(!is_null($objt->Concursos()->where('concurso_id','=',Input::get('concid'))->first()))
			return Response::json(array('error'=>true));

		$objt->Concursos()->attach(Input::get('concid'),
			array(
				'categoria' 		=> 	Input::get('categoria'),
				'pieza' 			=> 	Input::get('pieza'),
				'costounitario' 	=> 	Input::get('costo'),
				'avaluo' 			=> 	Input::get('avaluo'),
				'entrego' 			=> 	Input::get('entrego'),
				'calidad' 			=> 	Input::get('calidad'),
				'recibio' 			=> 	Input::get('recibio'),
				'fecharegistro' 	=> 	date('Y-m-d'),
				'observaciones' 	=> 	Input::get('observ')
				));
		return Response::json(array('success'=>true));
	}
}
