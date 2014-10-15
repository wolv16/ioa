<?php
class EditarArtesanoController extends BaseController {
public function editar()
{
return View::make('artesano.editar');
}
public function buscar()
{
$nombre = Input::get('nombre');
$paterno = Input::get('paterno');
$materno = Input::get('materno');
$artesano = Artesano::whereHas('persona',function($q) use ($nombre,$paterno,$materno)
{
$q->where('nombre','like','%'.$nombre.'%','and')
->where('nombre','like','%'.$paterno.'%','and')
->where('nombre','like','%'.$materno.'%');
})
->get();

		if(count($artesano) == 1){
			$artesano = $artesano -> first();
			$matricula = $artesano -> matricula;
				$nummatricula = "";
				if(!is_null($matricula))
					$nummatricula = $matricula -> matricula;
				$dato = array(
					'success' => true,
					'id' => $artesano -> id,
					'nombre' => $artesano -> persona -> nombre,
					'fechanace' => $artesano -> persona -> fechanace,
					'sexo' => $artesano -> persona -> sexo,
					'curp' => $artesano -> persona -> curp,
					'cp' => $artesano -> persona -> cp,
					);
		}
		else if(count($artesano) > 1){
			$dato = array();
			foreach ($artesano as $artesano) {
				$dato[] = array(
					'id' => $artesano -> id,
					'nombre' => $artesano -> persona -> nombre,
					'fechanace' => $artesano -> persona -> fechanace,
					'sexo' => $artesano -> persona -> sexo,
					'curp' => $artesano -> persona -> curp,
					'cp' => $artesano -> persona -> cp,
					);

			}
		}
		else
		$dato = array('success' => false);
//asñkdnvnlnvlernvpwrnvpnwrvnkvnwñvnqpihvpowhvwoehvohevhwrovhwprhbworhbhwrpobh
		return Response::json($dato);

	}
}