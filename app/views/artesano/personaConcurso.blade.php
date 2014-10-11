
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Registro
    @endsection 

@section('contenido')
	<div class="container wellr">
		<form class="form-horizontal" role="form" method='POST'>
				<div class="col-md-12">
					
						<div align=center><h3>INSTITUTO OAXAQUEÑO DE LAS ARTESANÍAS</h3></div>
						<div class="bg-orga col-md-12">FICHA DE REGISTRO DE CONCURSOS</div>
					<div class="col-md-12">	
						<div class="col-md-6">
							{{ Form::label ('nombre', 'Nombre Completo') }}
							{{ Form::text('nombre', null, array('placeholder' => 'Nombre - - ApellidoPaterno - - ApellidoMaterno','class' => 'form-control')) }} <br>
						</div>

						<div class="col-md-2">
							{{ Form::label('sexo', 'Sexo') }} 
							{{Form::select('sexo', array('1' => 'Masculino','2' => 'Femenino',), null, array('class' =>'form-control'))}}
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							{{ Form::label('fechanace', 'Fecha nacimiento') }}
							{{ Form::input('date','fechanace', null, array('class' => 'form-control')) }}
						</div>
						<div class="col-md-2">
							{{ Form::label('grupoetnico', 'Grupo Étnico') }}
							{{ Form::select('grupoetnico', array('1' => 'Seleccione grupo',),null,array('class' => 'form-control')) }}
						</div>

						
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
							{{ Form::email('region', null, array('placeholder' => 'Región','class' => 'form-control')) }}
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
						{{ Form::label('sangre', 'Tipo Teléfono') }} <br>
						{{Form::select('tiposangre', array('1' => 'Casa','2' => 'Celular','3' => 'Caseta','4' => 'Vecino',), null, array('class' =>'form-control'))}}
						</div>
												
						<div class="col-md-2">
						{{ Form::label('taller', 'Tipo Taller') }} <br>
						{{Form::select('taller', array('1' => 'Individual','2' => 'Familiar','3' => 'Organización',), null, array('class' =>'form-control'))}}
						</div>
						<div class="col-md-2">
						{{ Form::label('rama', 'Rama Artesanal') }} <br>
						{{Form::select('rama', array('1' => '','2' => '','3' => '','4' => '',), null, array('class' =>'form-control'))}}
						</div>
					</div>
				
				
				<div class="col-md-9">

					<h5>SUS COMPRADORES SON:</h5>
					<div class="col-md-3">
						{{ Form::label('compr', 'MAYORISTAS') }}
						{{ Form::checkbox('compr', 'value'); }}
					</div>
					<div class="col-md-3">
						{{ Form::label('compr', 'MINORISTAS') }}
						{{ Form::checkbox('compr', 'value'); }}
					</div>
					<div class="col-md-3">
						{{ Form::label('compr', 'OTROS') }}
						{{ Form::checkbox('compr', 'value'); }}
					</div>
				</div>


					<div class="col-md-6">
						{{ Form::label('observ', 'OBSERVACIONES') }}
						{{ Form::text('observ', null, array('placeholder' => 'Escriba las observaciones aquí','class' => 'form-control')) }}
					</div>
					
				<div class="col-md-12">
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Registrar</button>
				</div></div>
		</form>
	</div>

@stop

@section('scripts')


<script>
$(document).ready(function() {
    $('#formularioalta').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {}
                }
            },
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
            birthday: {
                validators: {
                    notEmpty: {},
                    date: {
                        format: 'DD/MM/YYYY'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {},
					integer:{}
                }
            }
        }
    });
}
);
</script>

<style type="text/css">
.wellr {
	background-color: rgba(51, 48, 45, 0.1)!important;
	margin-bottom: 20px;
	padding: 9px;
  border-radius: 3px;

}
</style>

<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/language/es_ES.js"></script>
@stop