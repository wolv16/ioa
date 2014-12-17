<?php
class EditarArtesanoController extends BaseController {
public function editar()
{
return View::make('artesano/editarartesano');
}
public function buscar()
{
$nombre = Input::get('artesanombre');
$paterno = Input::get('artesapaterno');
$materno = Input::get('artesamaterno');
$fecha= Input::get('fechanace');
$artesano = Artesano::whereHas('persona',function($q) use ($nombre,$paterno,$materno,$fecha)
{
$q->where('nombre','like','%'.$nombre.'%','and')
->where('nombre','like','%'.$paterno.'%','and')
->where('nombre','like','%'.$materno.'%')
->where('fechanacimiento','=',$fecha);
})
->first();

$artesano["persona"]["localidad_id"]=Localidad::find($artesano->persona->localidad_id)->nombre;
$artesano["persona"]["grupoetnico_id"]=Gruposetnico::find($artesano->persona->grupoetnico_id)->nombre;
$artesano["persona"]["rama_id"]=Rama::find($artesano->persona->rama_id)->nombre;
$artesano["documentos"]=Documento::where('persona_id','=',$artesano->persona_id)->get();
$artesano["compras"]=$artesano->comprasyventas()->get();
$artesano["organizacion"]=$artesano->organizacion;

		return Response::json($artesano);

	}
}