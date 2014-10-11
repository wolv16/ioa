
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Concursos
    @endsection 

@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method='POST'>
				<div class="col-md-12">
					<div class="col-md-12">
						<p><h3>REGISTRO DE CONCURSOS</h3></p>
						<div class="col-md-6">
							{{ Form::label ('concurso', 'NOMBRE CONCURSO') }}
							{{ Form::text('concurso', null, array('placeholder' => 'Escriba el nombre del concurso','class' => 'form-control')) }} 
						</div>

						<div class="col-md-4">
							{{ Form::label('nivel', 'NIVEL DEL CONCURSO') }} 
							{{Form::select('nivel', array('ESTATAL' => 'ESTATAL','NACIONAL' => 'NACIONAL',), null, array('class' =>'form-control'))}}
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