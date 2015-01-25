
@extends('layouts.baseartesanos')
    @section('titulo') REGISTRO EN FERIAS
    @endsection 
 
@section('contenido')
	<div class="container wellr">
			

		<div class="pull-left col-md-4" id="ferias">
	    	@if(isset($ferias))
	      		<div class="bg-orga col-md-12 text-center">PRÓXIMAS FERIAS</div>
	        @foreach($ferias as $feria)
	            <div class="container bg-evento col-md-12">
	            <div class="col-md-12">
	           	<p id='idferia' class='hidden'>{{$feria->id}}</p>
		              
		        <h4><i class="fa fa-chain-broken fa-lg pull-left"></i>{{ $feria->nombre }}</h4>
		        </div>
		        <div class="col-md-6">
		            <h5>LUGAR: {{$feria->lugar}}</h5>
		            <h5>TIPO: {{$feria->tipo}}</h5>
		            <h5>INICIO: {{$feria->fechainicio}}</h5>
		            <h5>FIN: {{$feria->fechafin}}</h5>
		              
	          	</div>
	            <div class="col-md-5" style="margin-left:0px">
	              	<span class="fa-stack fa-2x">
	              	<i class="fa fa-star fa-4x"></i></span>
	          	</div>            
	            </div>
	        @endforeach    
	      	@endif
	    </div>
				
		<div class="col-md-6 col-md-offset-1">
		<div class="col-sm-12 wellr">
		<div class="bg-orga col-md-12" style="margin-top:10px; text-align:center;">BUSCAR ARTESANOS</div>
		
		{{ Form::open(array('class'=>"form-horizontal",'id'=>'buscarartesano')) }}
		
			<div class="col-md-12">				
				
				<div class="form-group">
					{{ Form::label('artesanombre', 'Nombre(s)',array('style'=>'text-align: left;','class' => 'control-label col-sm-2')) }}
					<div class="col-sm-8">
					{{ Form::text('artesanombre', null, array('id'=>'artesanombre1','placeholder' => 'introduce nombre','class' => 'form-control')) }}
					</div>
				</div>

				<div class="form-group">
				{{ Form::label('artesapaterno', 'Apellido paterno',array('style'=>'text-align: left','class' => 'control-label col-sm-2')) }}
				<div class="col-sm-8">
				{{ Form::text('artesapaterno', null, array('placeholder' => 'introduce apellido paterno','class' => 'form-control')) }}
				</div>
				</div>

				<div class="form-group">
				{{ Form::label('artesamaterno', 'Apellido materno',array('style'=>'text-align: left','class' => 'control-label col-sm-2')) }}
				<div class="col-sm-8">
				{{ Form::text('artesamaterno', null, array('placeholder' => 'introduce apellido materno','class' => 'form-control')) }}
				</div>
				</div>


				<div class="form-group fecha">
		         	{{ Form::label('fecha1', 'Fecha de Nacimiento',array('style'=>'text-align: left','class' => 'control-label col-sm-2')) }}
		        <div class="input-group date" id="datetimePicker" style="padding-left: 14px; padding-right: 104px;">
		            {{ Form::text('fechanace', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
		            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		        </div>
				</div>
			</div>

			
			<div class="col-sm-12">

				<div class="form-group" style="top: 13px !important;">
					<button id="found" type="submit" class="btn btn-ioa pull-right">
						<span class="glyphicon glyphicon-search"></span> 
						Buscar 
					</button>
				</div>
				</div>
			

				{{Form::close()}}
			

	<div class="col-sm-12 pull-right hidden" id="artesano">
		{{ Form::open(array('url' => 'ArtesanoEnFeria2','class'=>"form-horizontal",'id'=>'registrar')) }}

		<div class="bg-orga col-md-12">ARTESANO</div>

		<div class="col-md-12">
		
			<h4>
			<label id="nombre" class="elementos"></label>
			</h4>

			<h4>
			<label id="nace" class="elementos"></label>
			</h4>

			<h4>
			<label id="sexo" class="elementos"></label>
			</h4>

			<h4>
			<label id="curp" class="elementos"></label>
			</h4>

			<div class="col-sm-2 form-group hidden">
				{{ Form::label('feriaid', 'fer') }}
				{{ Form::text('feriaid', null, array('placeholder' => 'Id','class' => 'form-control')) }}
			</div>
			<div class="col-sm-2 form-group hidden">
				{{ Form::label('artesanoid', 'art') }}
				{{ Form::text('artesanoid', null, array('id'=>'artesanoid','placeholder' => 'Id','class' => 'form-control')) }}
			</div>

			<div class="form-group" style="top: 13px !important;">
				<button type="submit" class="btn btn-ioa pull-right">
				<span class="glyphicon glyphicon-ok"></span> 
						Registrar 
				</button>
			</div>

		</div>
		{{Form::close()}}

</div>
		</div>		
</div>

</div>

@stop

@section('scripts')

<style type="text/css" media="screen">
	.fecha i{
	    right: 145px !important;
	  }
	.tok{
		top: 0px !important;
		right: 30px !important;
	}
</style>
<script src="js/bootstrapValidator.js" type="text/javascript"></script>
<script src="js/es_ES.js" type="text/javascript"></script>
	
<script type="text/javascript">
			$(document).ready(function() {

			$('#datetimePicker').datetimepicker({
		        language: 'es',
		        pickTime: false
		    });
			$('#buscarartesano').bootstrapValidator({
		        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
		        feedbackIcons: {
		            valid: 'glyphicon glyphicon-ok tok',
		            invalid: 'glyphicon glyphicon-remove tok',
		            validating: 'glyphicon glyphicon-refresh tok'
		        },
		        fields: {
		            artesanombre: {
		                validators: {
		                	notEmpty: {},
		                    regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
		                    }},
		            artesapaterno:{
		                validators: {
		                    notEmpty: {},
		                	regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
		                    }},
		            artesamaterno:{
						validators: {
		                    regexp:{
		                    regexp:/^[a-zA-Z áéíóúñÑÁÉÍÓÚ]+$/,
		                        message: 'Por favor verifica el campo'
		                    }
		                    }
		                },
	                fechanace: {
	                validators: {
	                    notEmpty: {},
	                    date: {
	                        format: 'YYYY-MM-DD'
	                    }
	                }
	            	}		            

		        }
		    })

.on('success.form.bv', function(e) {
	            e.preventDefault();
				$.post($(this).attr('action'), $(this).serialize(), function(json) {
					console.log(json);
					$('#artesano').removeClass("hidden");
						$('#nombre').text(json.persona.nombre);
						$('#nace').text(json.persona.fechanacimiento);
						$('#sexo').text(json.persona.sexo);
						$('#curp').text(json.persona.curp);
						$('#artesanoid').val(json.id);
				}, 'json').fail(function(){
					swal('Error','No se encontró el artesano','error');
				});
			});

		$('#datetimePicker1').on('dp.change dp.show', function(e) {
        $('#buscarartesano').bootstrapValidator('revalidateField', 'fechanace');
    });


$('#registrar').submit( function(e) {
    e.preventDefault();
    if($('[name = feriaid').val() == "")
       	swal('Error', 'Aun no seleccionas una Feria', 'error');
    else{
		$.post($(this).attr('action'), $(this).serialize(), function(json) {
		console.log(json);
		if(json.error)
			swal('Error', 'Este artesano ya esta inscrito en esta feria', 'error');
		else{
			swal('Operacion completada correctamente', '', 'success');
			$('#buscarartesano').data('bootstrapValidator').resetForm(true);
			$('#artesano').addClass("hidden");
		}
			$('#found').prop('disabled','disabled');
		}, 'json');
		}
	});

$('.bg-evento').click(function(){
	$('.bg-evento').removeClass('sombreado-evento');
	$(this).addClass('sombreado-evento');
	$('[name=feriaid]').val($(this).find('#idferia').text());
	$('#registrar').bootstrapValidator('revalidateField', 'feriaid');
	$('#found').removeAttr('disabled',false);
});
	$('#datetimePicker').on('dp.change dp.show', function(e) {
    $('#buscarartesano').bootstrapValidator('revalidateField', 'fechanace');
    });

});




</script>


@stop