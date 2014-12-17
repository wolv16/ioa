@extends('layouts.baseartesanos')
	@section('titulo')BÚSQUEDA DE EVENTOS
	@endsection

		@section('contenido')
		<div class="container wellr"> 
			<div class="col-sm-12 bg-titulo">EDITAR EVENTOS</div>
		
			<div class="col-sm-5 wellr">

				<div class="col-sm-12">
					<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<div class="btn-group" role="group">
					    <button id="12" type="button" class="btn btn-xs btn-primary">FERIA</button>
					</div>
					<div class="btn-group" role="group">
						<button id="123" type="button" class="btn btn-xs btn-primary">CONCURSO</button>
					</div>
					<div class="btn-group" role="group">
					    <button id="1234" type="button" class="btn btn-xs btn-primary">TALLER</button>
					</div>
					</div>
				</div>
		
		
		
			<div class="col-md-12 hidden" id="buscaTaller">
				{{ Form::open(array('id' =>'buscaTaller')) }}
				<div class="bg-orga col-md-12">BÚSQUEDA DE TALLERES</div>
				<div class="col-md-12 form-group">
					{{ Form::label ('tallernombre', 'NOMBRE DEL TALLER') }}
					{{ Form::text('tallernombre', null, array('placeholder' => 'Escriba el nombre del Taller','class' => 'form-control mayuscula')) }} 
				</div>

				<div class="col-md-12 form-group">
					{{ Form::label ('maestro', 'NOMBRE DEL MAESTRO') }}
					{{ Form::text('maestro', null, array('placeholder' => 'Nombre del maestro','class' => 'form-control mayuscula')) }} 
				</div>
		

				<div class="col-md-12">	
				<div class="form-group col-sm-12 fecha">
				    {{ Form::label('fecha1', 'FECHA DE INICIO',array('class' => 'control-label')) }}
				    <div class="input-group date" id="datetimePicker1">
				    {{ Form::text('fecha1', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
				    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				    </div>
				</div>
			
			<div class="form-group" style="top: 13px !important;">
				<button id="found" type="submit" class="btn btn-primary pull-right">
				<span class="glyphicon glyphicon-search"></span> 
					Buscar 
				</button>
				</div>
	
				{{Form::close()}}
			</div>
			</div>

	
			<div class="col-md-12" id="buscaFeria">
				{{ Form::open(array('id' =>'buscaFeria')) }}
				<div class="bg-orga col-md-12">BÚSQUEDA DE FERIAS</div>
				
				<div class="col-md-12 form-group">
				{{ Form::label('ferianombre', 'NOMBRE DE LA FERIA',array('class' => 'control-label')) }}
				{{ Form::text('ferianombre', null, array('placeholder' => 'Introduce nombre de la feria','class' => 'form-control')) }}
				</div>

				<div class="col-md-12 form-group">
					{{ Form::label('tipo', 'TIPO DE LA FERIA') }} 
					{{Form::select('tipo', array(''=>'Seleccione tipo','INTERNACIONAL' => 'Internacional','PABELLÓN FONART' => 'Pabellón Fonart','NACIONAL' => 'Nacional','REGIONAL' => 'Regional'), null, array('class' =>'form-control'))}}
				</div>

				<div class="form-group col-sm-12 fecha">
		        	{{ Form::label('fecha1', 'FECHA DE INICIO',array('class' => 'control-label')) }}
		          	<div class="input-group date" id="datetimePicker2">
		            {{ Form::text('fecha1', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
		            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		          	</div>
		        </div>


		        <div class="form-group" style="top: 13px !important;">
		        	<button id="found" type="submit" class="btn btn-primary pull-right">
		        	<span class="glyphicon glyphicon-search"></span> 
		        		Buscar 
		        	</button>
		        	</div>
				{{Form::close()}}

			</div>


		
			<div class="col-md-12 hidden" id="buscaConcurso">
				{{ Form::open(array('id' =>'buscaConcurso1')) }}
				<div class="bg-orga col-md-12">BÚSQUEDA DE CONCURSOS</div>
				
				<div class="col-md-12 form-group">
				{{ Form::label('concurnombre', 'NOMBRE DEL CONCURSO',array('class' => 'control-label')) }}
				{{ Form::text('concurnombre', null, array('placeholder' => 'Introduce el nombre del concurso','class' => 'form-control')) }}
				</div>

				<div class="col-md-12 form-group">
				{{ Form::label('nivel', 'NIVEL DEL CONCURSO') }} 
				{{Form::select('nivel', array(''=>'Seleccione nivel','ESTATAL' => 'ESTATAL','NACIONAL' => 'NACIONAL',), null, array('class' =>'form-control'))}}
				</div>

				<div class="form-group col-sm-12 fecha">
			        {{ Form::label('fecha', 'FECHA LÍMITE DE REGISTRO',array('class' => 'control-label')) }}
			        <div class="input-group date" id="datetimePicker3">
			        {{ Form::text('fecha1', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
			        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			        </div>
			    </div>

			    <div class="form-group" style="top: 13px !important;">
			    	<button id="found" type="submit" class="btn btn-primary pull-right">
			    	<span class="glyphicon glyphicon-search"></span> 
			    		Buscar 
			    	</button>
			    	</div>
			 	{{Form::close()}}
			</div>
		</div>
			


	<div class="col-sm-7 pull-right">
		<div class="col-md-12">
		
		

		</div>
	</div>
</div>
		
		@endsection


@section('scripts')
<style type="text/css" media="screen">
	.fecha i{
	    right: 55px !important;
	  }
	.tok{
		top: 17px !important;
		right: 23px !important;
	}
</style>
<script src="js/bootstrapValidator.js" type="text/javascript"></script>
<script src="js/es_ES.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {

$('#datetimePicker1 , #datetimePicker2 , #datetimePicker3').datetimepicker({
	language: 'es',
	pickTime: false
		    });

$('#buscaTaller').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok tok',
        invalid: 'glyphicon glyphicon-remove tok',
        validating: 'glyphicon glyphicon-refresh tok'
    },
    fields: {
        tallernombre: {
            validators: {
                regexp:{
                regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                    message: 'Por favor verifica el campo'
                },
                notEmpty: {}
        }
        },
        fecha1: {
            validators: {
                notEmpty: {},
                date: {
                    format: 'YYYY-MM-DD'
                }
            }
        },
        maestro: {
            validators: {
                regexp:{
                regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                    message: 'Por favor verifica el campo'
                },
                notEmpty: {}
                }}
    }
}

 )
$('#buscaFeria').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok tok',
        invalid: 'glyphicon glyphicon-remove tok',
        validating: 'glyphicon glyphicon-refresh tok'
    },
    fields: {
        ferianombre: {
            validators: {
                regexp:{
                regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                    message: 'Por favor verifica el campo'
                },
            notEmpty: {}
        }},
        fecha1: {
            validators: {
                notEmpty: {},
                date: {
                    format: 'YYYY-MM-DD'
                }
            }
        },
        tipo: {
            validators: {
                notEmpty: {}
                }}
    }
}

 )

}
    );
$('#buscaConcurso').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok tok',
        invalid: 'glyphicon glyphicon-remove tok',
        validating: 'glyphicon glyphicon-refresh tok'
    },
    fields: {
        concurnombre: {
            validators: {
                regexp:{
                regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                    message: 'Por favor verifica el campo'
                },
            notEmpty: {}
        }},
        fecha1: {
            validators: {
                notEmpty: {},
                date: {
                    format: 'YYYY-MM-DD'
                }
            }
        },
        nivel: {
            validators: {
                regexp:{
                regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
                    message: 'Por favor verifica el campo'
                },
                notEmpty: {}
                }}
    }
}

 )
	</script>

<script>
	  $('#found').click(function(){
        
      })
$('#12').click(function(){
	$('#buscaFeria').removeClass('hidden');
	$('#buscaConcurso').addClass('hidden');
	$('#buscaTaller').addClass('hidden');
});

$('#123').click(function(){
	$('#buscaConcurso').removeClass('hidden');
	$('#buscaTaller').addClass('hidden');
	$('#buscaFeria').addClass('hidden');

});
$('#1234').click(function(){
	$('#buscaTaller').removeClass('hidden');
	$('#buscaFeria').addClass('hidden');
	$('#buscaConcurso').addClass('hidden');

});
$('#datetimePicker1').on('dp.change dp.show', function(e) {
        $('#buscarartesano').bootstrapValidator('revalidateField', 'fecha1');
    });
$('#datetimePicker2').on('dp.change dp.show', function(e) {
        $('#buscarartesano').bootstrapValidator('revalidateField', 'fecha1');
    });
$('#datetimePicker3').on('dp.change dp.show', function(e) {
        $('#buscarartesano').bootstrapValidator('revalidateField', 'fecha1');
    });


</script>
@stop 