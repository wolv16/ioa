
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
            	 <p id='idconc' class='hidden'>{{$feria->id}}</p>
	              
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
              		<i class="fa fa-group fa-4x"></i></span>
          		</div>            
            </div>
          @endforeach    
      @endif
    </div>
				
			<div class="col-md-6 col-md-offset-1">
			<div class="bg-orga col-md-12" style="margin-top:10px; text-align:center;">BUSCAR ARTESANOS</div>
		
		{{ Form::open(array('id'=>'buscarartesano')) }}
		
			<div class="col-md-12">				
				<div class="col-md-12 form-group">
				{{ Form::label('artesanombre', 'Nombre(s)',array('class' => 'control-label')) }}
				{{ Form::text('artesanombre', null, array('placeholder' => 'introduce nombre','class' => 'form-control')) }}
				</div>

				<div class="col-md-12 form-group">
				{{ Form::label('artesapaterno', 'Apellido paterno') }}
				{{ Form::text('artesapaterno', null, array('placeholder' => 'introduce apellido paterno','class' => 'form-control')) }}
				</div>

				<div class="col-md-12 form-group">
				{{ Form::label('artesamaterno', 'Apellido materno') }}
				{{ Form::text('artesamaterno', null, array('placeholder' => 'introduce apellido materno','class' => 'form-control')) }}
				</div>
			</div>

			<div class="col-md-12 form-group">
				<div class="form-group col-sm-12 fecha">
		         	{{ Form::label('fecha1', 'Fecha de Nacimiento',array('class' => 'control-label')) }}
		          	<div class="input-group date" id="datetimePicker">
		            {{ Form::text('fechanace', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
		            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		          	</div>
				</div>

				<div class="form-group" style="top: 13px !important;">
					<button id="found" type="submit" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-search"></span> 
						Buscar 
					</button>
				</div>
			</div>

		{{Form::close()}}
				
</div>

</div>

@stop

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
        if($('[name = concid]').val() == ''){
          console.log("Falta el feria wey!!")
        }
       	else{
          $.post($('#buscarartesano').attr('action'), $('#buscarartesano').serialize(), function(json) {
          	console.log(json);
          	$('#buscarartesano').data('bootstrapValidator').resetForm(true);
          	$('.bg-evento').removeClass('sombreado-evento');
    }, 'json');
        }  
    });


}
    );

$('.bg-evento').click(function(){
	$('.bg-evento').removeClass('sombreado-evento');
	$(this).addClass('sombreado-evento');
	$('[name=concid]').val($(this).find('#idconc').text());
	$('#buscarartesano').bootstrapValidator('revalidateField', 'concid');
});
	$('#datetimePicker').on('dp.change dp.show', function(e) {
    $('#buscarartesano').bootstrapValidator('revalidateField', 'fechanace');
    });

	</script>


@stop