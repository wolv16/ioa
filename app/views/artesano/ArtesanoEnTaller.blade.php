
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Talleres
    @endsection 

@section('contenido')
	<div class="container wellr">
		

		<div class="col-sm-5">
			
		</div>

		<div class="pull-left col-sm-4 col-sm-offset-2" id="talleres">
	      @if(isset($talleres))
	      <div class="bg-orga col-md-12 text-center">PRÓXIMOS TALLERES </div>
	          @foreach($talleres as $taller)
	            <div class="container bg-evento col-md-12">
	            	<div class="col-md-12">
	            	 <p id='idconc' class='hidden'>{{$taller->id}}</p>
		              <h4><i class="fa fa-chain-broken fa-lg pull-left"></i>{{ $taller->nombre }}</h4>
		          	</div>
		          	<div class="col-md-6">
		              <h5>MAESTRO: {{$taller->maestro}}</h5>
		              <h5>INICIO: {{$taller->fechainicio}}</h5>
		              <h5>FIN: {{$taller->fechafin}}</h5>
		              
	          		</div>
	              	<div class="col-md-5" style="margin-left:0px">
	              		<span class="fa-stack fa-2x">
	              		<i class="fa fa-group fa-4x"></i></span>
	          		</div>            
	            </div>
	          @endforeach    
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
