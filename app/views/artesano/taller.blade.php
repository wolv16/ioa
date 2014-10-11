
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Talleres
    @endsection 

@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method="POST">
				<div class="col-md-12">
					<div class="col-md-12">
						<p><h3>REGISTRO DE TALLERES</h3></p>
						<div class="col-md-5">
							{{ Form::label ('taller', 'NOMBRE DEL TALLER') }}
							{{ Form::text('taller', null, array('placeholder' => 'Escriba el nombre del Taller','class' => 'form-control')) }} 
						</div>

						<div class="col-md-5">
							{{ Form::label ('maestro', 'NOMBRE DEL MAESTRO') }}
							{{ Form::text('maestro', null, array('placeholder' => 'Nombre del maestro','class' => 'form-control')) }} 
						</div>
						<div class="col-md-3">
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