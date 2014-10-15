@extends('layaouts.base')
	@section('titulo')IOA
	@endsection

		@section('contenido')
		<form id="buscarartesano" role="form" method="POST" action="buscar">
		<div class="col-md-12">

		<h3>Búsqueda por datos</h3>
		<div class="col-md-3 form-group">
		{{ Form::label('artesanombre', 'Nombre(s)',array('class' => 'control-label')) }}
		{{ Form::text('artesanombre', null, array('placeholder' => 'introduce nombre','class' => 'form-control')) }}
		</div>

		<div class="col-md-3 form-group">
		{{ Form::label('artesapaterno', 'Apellido paterno') }}
		{{ Form::text('artesapaterno', null, array('placeholder' => 'introduce apellido paterno','class' => 'form-control')) }}
		</div>

		<div class="col-md-3 form-group">
		{{ Form::label('artesamaterno', 'Apellido materno') }}
		{{ Form::text('artesamaterno', null, array('placeholder' => 'introduce apellido materno','class' => 'form-control')) }}
		</div>

		<div class="col-md-2">
		{{ Form::submit('Buscar', array('placeholder' => '','class' => 'btn btn-primary')) }}
		</div>
		</div>

		</form>
		<!--44444444444444444444444444444444444444444444444444444444 -->
		<div id="error" class="col-md-12 hidden" style="margin-top:10px;">
		<p class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-lg"></i> No se encontro ningún artesano
		</p>
		</div>

		<i class="fa fa-spinner fa-2x fa-spin hidden spin-form"></i>
		
		<div id="artesano" class="col-md-12 tabla hidden">
		<h2 style="">Artesano</h2>
		<table id="tartesano"class="table">
		<thead>
		<tr>
		<th>id</th>
		<th>Nombre(s)</th>
		<th>Fecha de nacimiento</th>
		<th>Sexo</th>
		<th>Curp</th>
		<th>cp</th>
		
		
		</tr>
		</thead>
		<tbody>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>
		
		{{ Form::open(array('url' => '','role' => 'form','id' => 'pagar','class' => 'form-inline')) }}
		<div class="form-group">
		{{ Form::text('cantidad', null, array('class' => 'form-control','placeholder' => 'Cantidad')) }}
		{{ Form::text('id', null, array('class' => 'hidden form-control')) }}
		</div>
		{{ Form::button('Registrar pago',array('class' => 'pagar btn btn-success','type' => 'submit','id' => 'bpagar')) }}
		{{form::close()}}
		</td>
		</tr>
		</tbody>
		</table>
		</div>

		<div class="modal fade bs-example-modal-lg" id="Artesanos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="Artesanos">
		<i class="fa fa-eye"></i> Artesanos
		</h4>
		</div>
		<div class="modal-body">
		<table id="artesanos" class="table">
			<thead>
			<tr>
			<th>id</th>
			<th>Nombre(s)</th>
			<th>Fecha de nacimiento</th>
			<th>Rama</th>
			<th>Seleccionar</th>
			</tr>
			</thead>
				<tbody>
				</tbody>
		</table>
		</div>
			<div class="modal-footer">
			</div>
			</div>
			</div>
			</div>
			@endsection