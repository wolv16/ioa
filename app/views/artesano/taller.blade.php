
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Talleres
    @endsection 

@section('contenido')
	<div class="container wellr col-sm-8 col-sm-offset-2">
		<form id="altaller" role="form" method="POST">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="bg-orga col-md-12">REGISTRO DE TALLER</div>
						<div class="col-md-12">
						<div class="col-md-5 form-group">
							{{ Form::label ('taller', 'NOMBRE DEL TALLER') }}
							{{ Form::text('taller', null, array('placeholder' => 'Escriba el nombre del Taller','class' => 'form-control mayuscula')) }} 
						</div>

						<div class="col-md-5 form-group">
							{{ Form::label ('maestro', 'NOMBRE DEL MAESTRO') }}
							{{ Form::text('maestro', null, array('placeholder' => 'Nombre del maestro','class' => 'form-control mayuscula')) }} 
						</div>
						</div>

						<div class="col-md-12">	
						<div class="form-group col-sm-3 fecha">
						          {{ Form::label('fecha1', 'FECHA DE INICIO',array('class' => 'control-label')) }}
						          <div class="input-group date" id="datetimePicker1">
						            {{ Form::text('fecha1', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
						            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						          </div>
						        </div>
						<div class="form-group col-sm-3 fecha">
						          {{ Form::label('fecha2', 'FECHA DE FINALIZACIÓN',array('class' => 'control-label')) }}
						          <div class="input-group date" id="datetimePicker2">
						            {{ Form::text('fecha2', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
						            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						          </div>
						        </div>
						</div>

					</div>
				
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right">Registrar
					<span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</div>
		</form>
	</div>
@stop

@section('scripts')

<style type="text/css" media="screen">
	.fecha i{
	    right: 55px !important;
	  }
	.tok{
		top: 18px !important;
		
	}
</style>
<script src="js/bootstrapValidator.js" type="text/javascript"></script>
	<script src="js/es_ES.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datetimePicker1').datetimepicker({
		        language: 'es',
		        pickTime: false
		    });
		    $('#datetimePicker2').datetimepicker({
		        language: 'es',
		        pickTime: false
		    });
			$('#altaller').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok tok',
            invalid: 'glyphicon glyphicon-remove tok',
            validating: 'glyphicon glyphicon-refresh tok'
        },
        fields: {
        	taller:{
        		validators:{
        			notEmpty:{},
        			regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
        		}},
			fecha1:{
				validators:{
					notEmpty:{},
					date: {
		            format: 'YYYY-MM-DD'
		            }
				}

			},
			fecha2:{
				validators:{
					notEmpty:{},
					date: {
		            format: 'YYYY-MM-DD'
		            }
				}

			},
			maestro:{
				validators:{
					notEmpty:{},
					regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
				}

			}
        		}
        	})
			$('.mayuscula').focusout(function() {
				$(this).val($(this).val().toUpperCase());
			});
			$('#datetimePicker1').on('dp.change dp.show', function(e) {
        $('#altaller').bootstrapValidator('revalidateField', 'fecha1');
    });
			$('#datetimePicker2').on('dp.change dp.show', function(e) {
        $('#altaller').bootstrapValidator('revalidateField', 'fecha2');
    });
		});
</script>
@stop
