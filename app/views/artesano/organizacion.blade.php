
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Padrón
    @endsection 

@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method="POST">
				<div class="col-md-12">


<p><h3>CREAR ORGANIZACIÓN</h3></p>
						<div class="col-xs-4 col-md-4">
							{{ Form::label ('organización', 'NOMBRE ORGANIZACIÓN') }}
							{{ Form::text('nombreOrg', null, array('placeholder' => 'Escriba el nombre de la organización','class' => 'form-control')) }} <br>
						</div>
						<div class="col-md-3">
							{{ Form::label ('tel', 'TELÉFONO DEL MUNICIPIO') }}
							{{ Form::text('telMun', null, array('placeholder' => 'Escriba el número de telefono','class' => 'form-control')) }} <br>
						</div>
						<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Registrar</button>
						</div>

						</div>

		</form>
	</div>
@stop

@section('scripts')

@stop