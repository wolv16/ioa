
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Ferias
    @endsection 

@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method='POST'>
				<div class="col-md-12">
					<div class="col-md-12">
						<p><h3>REGISTRO DE FERIAS</h3></p>
						<div class="col-md-6">
							{{ Form::label ('feria', 'NOMBRE FERIA') }}
							{{ Form::text('feria', null, array('placeholder' => 'Escriba el nombre de la feria','class' => 'form-control')) }} 
						</div>

						<div class="col-md-3">
							{{ Form::label('tipo', 'TIPO DE LA FERIA') }} 
							{{Form::select('tipo', array('Internacional' => 'Internacional','Pabellón Fonart' => 'Pabellón Fonart','Nacional' => 'Nacional','Regional' => 'Regional'), null, array('class' =>'form-control'))}}
						</div>
						
						<div class="col-md-4">
							{{ Form::label('date', 'FECHA') }}
							{{ Form::input('date','fecha', null, array('class' => 'form-control')) }}
						</div>

					</div>
				
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary center-block">Registrar</button>
				</div>
			</div>
		</form>
	</div>
@stop