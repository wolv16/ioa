
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Registro
    @endsection 

@section('contenido')
	<div class="container wellr form-group">
		<form class="form-horizontal" role="form" method="POST" id="formalta">
				<div class="col-md-12">
					
						<div align=center><h3>INSTITUTO OAXAQUEÑO DE LAS ARTESANÍAS</h3></div>
						<div class="bg-orga col-md-12">FICHA DE REGISTRO DE ARTESANOS</div>
					<div class="col-md-12">	
						<div class="col-md-6">
							{{ Form::label ('nombre', 'Nombre Completo') }}
							{{ Form::text('nombre', null, array('placeholder' => 'Nombre - - ApellidoPaterno - - ApellidoMaterno','class' => 'form-control')) }} <br>
						</div>

						<div class="col-md-2">
							{{ Form::label('sexo', 'Sexo') }} 
							{{Form::select('sexo', array('Masculino' => 'Masculino','Femenino' => 'Femenino',), null, array('class' =>'form-control'))}}
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							{{ Form::label('fechanace', 'Fecha nacimiento') }}
							{{ Form::input('date','fechanace', null, array('class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('grupoetnico', 'Grupo Étnico') }}
							{{ Form::select('grupoetnico', array('1' => 'Triki trakes',),null,array('class' => 'form-control')) }}
						</div>

						<div class="col-md-3">
							{{ Form::label('civil', 'Estado Civil') }} 
							{{Form::select('civil', array('Soltero' => 'Soltero','Casado' => 'Casado',), null, array('class' =>'form-control'))}}
						</div>
					</div>	
						<div class="col-md-4">
							{{ Form::label('curp', 'CURP') }}
							{{ Form::text('curp', null, array('placeholder' => 'Ingrese CURP','class' => 'form-control')) }}
						</div>

						<div class="col-md-3">
							{{ Form::label('RFC', 'RFC') }}
							{{ Form::text('RFC', null, array('placeholder' => 'Ingrese RFC','class' => 'form-control')) }}
						</div>
						<div class="col-md-3">
							{{ Form::label('credencial', 'IFE') }}
							{{ Form::text('ife', null, array('placeholder' => 'Ingrese Cred de elector','class' => 'form-control')) }}

						</div>	

						<div class="col-md-8">
							{{ Form::label('domicilio', 'Domicilio') }}
							{{ Form::text('domicilio', null, array('placeholder' => 'introduce calle y número','class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('cp', 'C.P.') }}
							{{ Form::text('cp', null, array('placeholder' => 'Ingrese CP','class' => 'form-control')) }}
						</div>

						<div class="col-md-4">
							{{ Form::label('localidad', 'Localidad') }}
							{{ Form::text('localidad', null, array('placeholder' => 'Seleccione localidad','class' => 'form-control')) }}
						</div>
						<div class="col-md-4">
							{{ Form::label('municipio', 'Municipio') }}
							{{ Form::text('municipio', null, array('placeholder' => 'Municipio','class' => 'form-control')) }} 
						</div>
					
						<div class="col-md-3">
							{{ Form::label('distrito', 'Distrito') }}
							{{ Form::text('distrito', null, array('placeholder' => 'Lugar nacimiento','class' => 'form-control')) }}
						</div>
					
						<div class="col-md-3">
							{{ Form::label('region', 'Región') }}
							{{ Form::text('region', null, array('placeholder' => 'Región','class' => 'form-control')) }}
						</div>

							<div class="col-md-1">
							{{ Form::label('lada', 'Lada') }}
							{{ Form::text('lada', null, array('placeholder' => 'Lada','class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('tel', 'Telefono') }}
							{{ Form::text('tel', null, array('placeholder' => 'Teléfono','class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
						{{ Form::label('tipoTel', 'Tipo Teléfono') }} <br>
						{{Form::select('tipoTel', array('Casa' => 'Casa','Celular' => 'Celular','Caseta' => 'Caseta','Vecino' => 'Vecino',), null, array('class' =>'form-control'))}}
						</div>
												
						<div class="col-md-2">
						{{ Form::label('taller', 'Tipo Taller') }} <br>
						{{Form::select('taller', array('Individual' => 'Individual','Familiar' => 'Familiar',), null, array('class' =>'form-control'))}}
						</div>

						<div class="col-md-2">
						{{ Form::label('rama', 'Rama Artesanal') }} <br>
						{{Form::select('rama', array('1' => 'Alfareria','2' => '','3' => '','4' => '',), null, array('class' =>'form-control'))}}
						</div>

						<div class="col-md-12">
							<p><h4>PRODUCTOS ELABORADOS</h4></p>
							<div class="col-md-4">
							{{ Form::label('producto', 'Nombre del Producto') }}
							{{ Form::text('producto', null, array('placeholder' => 'Producto','class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('prod', 'Producción Mensual') }}
							{{ Form::text('prod', null, array('placeholder' => 'Producción mensual','class' => 'form-control')) }}
						</div>

						<div class="col-md-2">
							{{ Form::label('costo', 'Costo Aproximado') }}
							{{ Form::text('costo', null, array('placeholder' => 'Costo','class' => 'form-control')) }}
						</div>
							
						</div>
					</div>
				
				<div class="col-md-9">
					<p><h4>SELECCIONE 1 O MÁS OPCIONES</h4></p>
					<h5>LA MATERIA PRIMA LA COMPRA EN:</h5>
					<div class="col-md-3">
						{{ Form::radio('matprim1', '1'); }}
						{{ Form::label('matprim', 'MISMA LOCALIDAD') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('matprim2', '2'); }}
						{{ Form::label('matprim', 'OTRO MUNICIPIO') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('matprim3', '3'); }}
						{{ Form::label('matprim', 'CAPITAL DEL ESTADO') }}
						 
					</div>
				</div>
				<div class="col-md-9">

					<h5>SUS PRODUCTOS LOS VENDE A NIVEL:</h5>
					<div class="col-md-3">
						{{ Form::radio('venta1', '4'); }}
						{{ Form::label('venta', 'NACIONAL') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('venta2', '5'); }}
						{{ Form::label('venta', 'ESTATAL') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('venta3', '6'); }}
						{{ Form::label('venta', 'REGIONAL') }}
						
					</div>
				</div>
				<div class="col-md-9">

					<h5>SUS COMPRADORES SON:</h5>
					<div class="col-md-3">
						{{ Form::radio('compr1', '7'); }}
						{{ Form::label('compr', 'MAYORISTAS') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('compr2', '8'); }}
						{{ Form::label('compr', 'MINORISTAS') }}
						
					</div>
					<div class="col-md-3">
						{{ Form::radio('compr3', '9'); }}
						{{ Form::label('compr', 'OTROS') }}
						
					</div>
				</div>


					<div class="col-md-6"><br>
						{{ Form::label('observ', 'OBSERVACIONES') }}
						{{ Form::text('observ', null, array('placeholder' => 'Escriba las observaciones aquí','class' => 'form-control')) }}<br>
					</div>
					
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						 Registrar 
						<span class="glyphicon glyphicon-ok"></span></button>
				</div>
		</form>
	</div>

@stop

@section('scripts')

<script src="/js/bootstrapValidator.js" type="text/javascript"></script>
	<script src="js/es_ES.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#formalta').bootstrapValidator({
		        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
		        feedbackIcons: {
		            valid: 'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
		        },
		        fields: {
		            nombre: {
		                validators: {
		                    notEmpty: {},
		                	regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
		                    }},
		            cp:{
		                validators: {
		                    integer: {},
							stringLength:{
								min: 5,
								max: 5,
								message: 'El CP debe tener 5 dígitos'
							}
		                }
		            },
		            curp:{
						validators:{
		                    stringLength: {
		                        min: 18,
		                        max:18,
		                        message:'Se requieren 18 caracteres para CURP'
		                    },
		                    notEmpty:{}
						}
		            },
		            RFC: {
		                validators: {
		                    stringLength: {
		                        min: 13,
		                        max:13,
		                        message:'Se requieren 13'
		                    }
		                }
		            },
		            email: {
		                validators: {
		                    emailAddress: {}
		                }
		            },
		            fechanace: {
		                validators: {
		                    notEmpty: {},
		                    date: {
		                        format: 'DD/MM/YYYY'
		                    }
		                }
		            },
		            tel: {
		                validators: {
		                    notEmpty: {},
							integer:{}
		                }},
		                lada: {
		                validators: {
		                    integer: {},
		                    stringLength: {
		                        min: 3,
		                        max: 3,
		                        message:'Verifica'
		                }
		            }
		            }
		        }
		    }
		    
		     )


}
    );
	</script>

@stop

