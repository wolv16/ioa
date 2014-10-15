
@extends('layouts.baseartesanos')
    @section('titulo') 
    @endsection 
 
@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method="POST" action='por' id='buscaorg'>
				<div class="col-md-12">
				<p><h3>REGISTRO DE ARTESANOS POR ORGANIZACION</h3></p>
						</div>
						<div class="bg-orga col-md-12">DATOS ORGANIZACIÓN</div>
					
						<div class="col-xs-4 col-md-6">
							{{ Form::label ('organización', 'NOMBRE ORGANIZACIÓN') }}
							{{ Form::text('nombreorg', null, array('placeholder' => 'Escriba el nombre de la organización','class' => 'form-control')) }} <br>
						</div>
						<div class="col-md-3">
							{{ Form::label ('tel', 'TELÉFONO DEL MUNICIPIO') }}
							{{ Form::text('telmun', null, array('placeholder' => 'Escriba el número de telefono','class' => 'form-control')) }} <br>
						</div>
						<div class="col-md-1">
						<button type="submit" class="btn btn-primary">
						 Buscar 
						</button>
					</div>

		</form>
						<form class="form-horizontal" role="form" method="POST" id="">
						<div class="bg-orga col-md-12">DATOS DEL ARTESANO</div>
					
						
						<div class="col-md-12">
					
						<div class="col-md-12">	
						<div class="col-md-6">
							{{ Form::label ('nombre', 'Nombre Completo') }}
							{{ Form::text('nombre', null, array('placeholder' => 'Nombre(s)       -      ApellidoPaterno        -        ApellidoMaterno','class' => 'form-control')) }} <br>
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

						<div class="col-md-5">
							{{ Form::label('localidad', 'Localidad') }}
							{{ Form::text('localidad', null, array('placeholder' => 'Seleccione localidad','class' => 'form-control')) }}
						</div>
						<div class="col-md-5">
							{{ Form::label('municipio', 'Municipio') }}
							{{ Form::text('municipio', null, array('placeholder' => 'Municipio','class' => 'form-control')) }} 
						</div>
					
						<div class="col-md-5">
							{{ Form::label('distrito', 'Distrito') }}
							{{ Form::text('distrito', null, array('placeholder' => 'Lugar nacimiento','class' => 'form-control')) }}
						</div>
					
						<div class="col-md-5">
							{{ Form::label('region', 'Región') }}
							{{ Form::text('region', null, array('placeholder' => 'Región','class' => 'form-control')) }}
						</div>
					
						<div class="col-md-12">
						<h4>Productos Elaborados</h4>
						
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
						{{Form::select('taller', ['Organización' => 'Organización'],null, ['class' =>'form-control'])}}
						</div>
						<div class="col-md-2">
						{{ Form::label('rama', 'Rama Artesanal') }} <br>
						{{Form::select('rama', array('1' => 'Alfareria','2' => '','3' => '','4' => '',), null, array('class' =>'form-control'))}}
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

					<div class="col-md-6">
						{{ Form::label('observ', 'OBSERVACIONES') }}
						{{ Form::text('observ', null, array('placeholder' => 'Escriba las observaciones aquí','class' => 'form-control')) }}
					</div>

				<div>	
					<div class="col-md-1">
							{{ Form::label('comiteid', 'Comite') }}
							{{ Form::text('comiteid', null, array('placeholder' => 'Comiteid','class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('orgid', 'Organizacion') }}
							{{ Form::text('orgid', null, array('placeholder' => 'Org id','class' => 'form-control')) }}
				</div>
				</div>			
															
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						 Registrar 
						<span class="glyphicon glyphicon-pencil"></span>
						<span class="glyphicon glyphicon-ok"></span></button>
				</div>

		</form>
	</div>
@stop

@section('scripts')
<script src="js/bootstrapValidator.js" type="text/javascript"></script>
	<script src="js/es_ES.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#buscaorg').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombreorg: {
                validators: {
                    notEmpty: {
                    },
                    regexp: {
                        regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                        message: 'Por favor verifica el campo'
                    }
                }
            },
            telmun:{
            	validators: {
            		notEmpty: {},
            		integer: {
                    }
            	}
            }
        }
    })
    .on('success.form.bv', function(e) {
            e.preventDefault();

            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
            	console.log(result)
                $('input [name=orgid]').val(result.id);
            }, 'json');
    });
		});
	</script>

@stop