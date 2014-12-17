
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Concursos
    @endsection 

@section('contenido')
<?php $status=Session::get('status'); ?>

	<div class="container wellr col-sm-7 col-sm-offset-2">
		<form role="form" method='POST' id="concursoform">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<div class="bg-orga col-md-12">REGISTRO DE CONCURSOS</div>
						
						<div class="col-sm-12">
						<div class="col-sm-7 form-group">
							{{ Form::label ('concurso', 'NOMBRE CONCURSO') }}
							{{ Form::text('concurso', null, array('placeholder' => 'Escriba el nombre del concurso','class' => 'form-control mayuscula')) }} 
						</div>

					</div>

					<div class="col-sm-12">

						<div class="col-md-5 form-group">
							{{ Form::label('nivel', 'NIVEL DEL CONCURSO') }} 
							{{Form::select('nivel', array(''=>'Seleccione nivel','ESTATAL' => 'ESTATAL','NACIONAL' => 'NACIONAL',), null, array('class' =>'form-control'))}}
						</div>
					</div>

				<div class="form-group col-sm-4 fecha">
			        {{ Form::label('fecha', 'FECHA LÍMITE DE REGISTRO',array('class' => 'control-label')) }}
			        <div class="input-group date" id="datetimePicker1">
			        {{ Form::text('fecha1', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
			        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			        </div>
			    </div>

		        <div class="form-group col-sm-4 fecha">
		        	{{ Form::label('fecha', 'FECHA DE LA PREMIACIÓN',array('class' => 'control-label')) }}
		        	<div class="input-group date" id="datetimePicker2">
		            {{ Form::text('fecha2', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
		            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		        	</div>
		        </div>

				</div>
				
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right">Registrar
					<span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</div>
		</form>

		 <div class="message col-md-6 col-md-offset-3" style="">
        @if($status == 'fail_create')
        <div id="error" style="margin-top:10px;">
            <p class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-lg"></i> Ocurrio un error 
            </p>
        </div>
        @elseif(($status == 'ok_create'))
        <div id="error" style="margin-top:10px;">
            <p class="alert alert-success"><i class="fa fa-check-square-o fa-lg"></i> Operacion completada correctamente
            </p>
        </div>
        @endif
    </div> 
	</div>
@stop

@section('scripts')

<style type="text/css" media="screen">
	.fecha i{
	    right: 55px !important;
	  }
	.tok{
		top: 18px !important;
		right: 23px !important;
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

			$('#concursoform').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok tok',
            invalid: 'glyphicon glyphicon-remove tok',
            validating: 'glyphicon glyphicon-refresh tok'
        },
        fields: {
        	concurso:{
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
			nivel:{
				validators:{
					notEmpty:{},
				}

			}
        		}
        	})
			$('.mayuscula').focusout(function() {
				$(this).val($(this).val().toUpperCase());
			});
			$('#datetimePicker1').on('dp.change dp.show', function(e) {
        $('#concursoform').bootstrapValidator('revalidateField', 'fecha1');
    });
			$('#datetimePicker2').on('dp.change dp.show', function(e) {
        $('#concursoform').bootstrapValidator('revalidateField', 'fecha2');
    });

		});
</script>
@stop