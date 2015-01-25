
@extends('layouts.baseartesanos')
    @section('titulo') IOA-Registro
    @endsection 

@section('contenido')
	<div class="container wellr">
		<div class="bg-orga col-md-12">DATOS DEL ARTESANO</div>

		
			{{ Form::open(array('id' => 'formalta', 'url' => 'artesano/registro', 'files'=>true)) }}
				<div class="col-md-12">
					
					
					<div class="col-md-12">	
						
						<div class="col-md-6 form-group">
							
							{{ Form::label ('nombre', 'Nombre Completo',array('class' => 'control-label')) }}
							{{ Form::text('nombre', null, array('placeholder' => 'Nombre -- Apellido Paterno -- Apellido Materno','class' => 'form-control mayuscula')) }}
							</div>

						<div class="form-group col-md-3 fecha">
				          {{ Form::label('fechanace', 'Fecha de nacimiento',array('class' => 'control-label')) }}
				          <div class="input-group date" id="datetimePicker">
				            {{ Form::text('fechanace', null, array('class' => 'form-control','placeholder' => 'YYYY-MM-DD', 'data-date-format' => 'YYYY-MM-DD')) }}
				            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				          </div>
				        </div>
					</div>

					<div class="col-md-12">

						<div class="col-md-2 form-group">
							{{ Form::label('sexo', 'Sexo',array('class' => 'control-label')) }} 
							{{Form::select('sexo', array('' => 'Seleccione','Masculino' => 'Masculino','Femenino' => 'Femenino',), null, array('class' =>'form-control'))}}
						</div>

						<div class="col-md-2 form-group">
							
							{{ Form::label ('cuis', 'No. CUIS',array('class' => 'control-label')) }}
							{{ Form::text('cuis', null, array('placeholder' => 'CUIS','class' => 'form-control')) }}
							</div>
						<div class="col-md-2 form-group">
							{{ Form::label('grupoetnico', 'Grupo Étnico',array('class' => 'control-label')) }}
							{{ Form::select('grupoetnico', $grupos ,null,array('class' => 'form-control')) }}

						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('civil', 'Estado Civil') }} 
							{{Form::select('civil', array('' => 'Seleccione','Soltero' => 'Soltero','Casado' => 'Casado',), null, array('class' =>'form-control'))}}
						</div>

					</div>	

					<div class="col-md-12">
						<div class="col-md-4 form-group">	
							{{ Form::label('curp', 'CURP') }}
							{{ Form::text('curp', null, array('placeholder' => 'Ingrese CURP','class' => 'form-control mayuscula')) }}
						</div>

						<div class="col-md-3 form-group">	
							{{ Form::label('RFC', 'RFC') }}
							{{ Form::text('RFC', null, array('placeholder' => 'Ingrese RFC','class' => 'form-control mayuscula')) }}	
						</div>

						<div class="col-md-2 form-group">	
							{{ Form::label('credencial', 'INE') }}
							{{ Form::text('ine', null, array('placeholder' => 'Ingrese num','class' => 'form-control')) }}	
						</div>	
					</div>

					<div class="col-md-12">
						<div class="col-md-4 form-group">
							{{ Form::label('domicilio', 'Domicilio') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-home"></i></div>
							{{ Form::text('domicilio', null, array('placeholder' => 'introduce calle y número','class' => 'form-control')) }}
						</div>
							</div>
						
							<div class="form-group col-md-2">
							{{ Form::label('cp', 'C.P.') }}
							{{ Form::text('cp', null, array('placeholder' => 'Ingrese CP','class' => 'form-control')) }}
							</div>
		
					</div>

					<div class="col-md-12">
						<div class="col-md-4 form-group">
							{{ Form::label('municipio', 'Municipio') }}
							{{ Form::select('municipio',$municipios, null, array('class' => 'form-control','id'=>'selectmun')) }} 
						</div>
	
						<div class="form-group col-md-4">
							{{ Form::label('localidad', 'Localidad') }}
							{{ Form::select('localidad',array(), null, array('class' => 'form-control', 'id'=>'selectloc')) }}
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-2 form-group">
							{{ Form::label('lada', 'Lada') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							{{ Form::text('lada', null, array('placeholder' => 'Lada','class' => 'form-control')) }}
						</div>
					</div>
						
						<div class="col-md-2 form-group">
							{{ Form::label('tel', 'Telefono') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							{{ Form::text('tel', null, array('placeholder' => 'Teléfono','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
						{{ Form::label('tipoTel', 'Tipo Teléfono') }} <br>
						{{Form::select('tipoTel', array('' => 'Seleccione','Casa' => 'Casa','Celular' => 'Celular','Caseta' => 'Caseta','Vecino' => 'Vecino',), null, array('class' =>'form-control'))}}
						</div>
					
						
												
						<div class="col-md-2 form-group">
						{{ Form::label('taller', 'Tipo Taller') }} 
						{{Form::select('taller', array('' => 'Seleccione','Individual' => 'Individual','Familiar' => 'Familiar',), null, array('class' =>'form-control'))}}
						</div>

						<div class="col-md-2 form-group">
						
						{{ Form::label('rama', 'Rama Artesanal') }} 
						{{Form::select('rama', $ramas, null, array('class' =>'form-control'))}}
						</div>
					</div>

						
							<p><h4>PRINCIPALES PRODUCTOS ELABORADOS</h4></p>
						<div class="col-md-12">	
						<div class="col-md-4 form-group">	
							{{ Form::label('producto', 'Nombre del Producto') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-info"></i></div>
							{{ Form::text('producto1', null, array('placeholder' => 'Producto','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('prod', 'Producción Mensual') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-bar-chart"></i></div>
							{{ Form::text('prod1', null, array('placeholder' => 'Prod. mens.','class' => 'form-control')) }}
						</div>
						</div>

					<div class="col-md-2 form-group">
							{{ Form::label('costo', 'Costo Aproximado') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-dollar"></i></div>
							{{ Form::text('costo1', null, array('placeholder' => 'Costo','class' => 'form-control')) }}
						</div>	
					</div>

						</div>
					

						<div class="col-md-12">	
						<div class="col-md-4 form-group">	
							{{ Form::label('producto', 'Nombre del Producto') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-info"></i></div>
							{{ Form::text('producto2', null, array('placeholder' => 'Producto','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('prod', 'Producción Mensual') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-bar-chart"></i></div>
							{{ Form::text('prod2', null, array('placeholder' => 'Prod. mens.','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('costo', 'Costo Aproximado') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-dollar"></i></div>
							{{ Form::text('costo2', null, array('placeholder' => 'Costo','class' => 'form-control')) }}
							</div>
						</div>
							
						</div>

						<div class="col-md-12">	
						<div class="col-md-4 form-group">	
							{{ Form::label('producto', 'Nombre del Producto') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-info"></i></div>
							{{ Form::text('producto3', null, array('placeholder' => 'Producto','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('prod', 'Producción Mensual') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-bar-chart"></i></div>
							{{ Form::text('prod3', null, array('placeholder' => 'Prod. mens.','class' => 'form-control')) }}
						</div>
						</div>

						<div class="col-md-2 form-group">
							{{ Form::label('costo', 'Costo Aproximado') }}
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-dollar"></i></div>
							{{ Form::text('costo3', null, array('placeholder' => 'Costo','class' => 'form-control')) }}
						</div>
					</div>
							
						</div>

					
				<div class="col-md-12 wellr">
				<div class="col-md-9">
					<p>SELECCIONE 1 O MÁS OPCIONES</p>
					<h5>LA MATERIA PRIMA LA COMPRA EN:</h5>
					<div class="col-md-3 form-group">
						{{ Form::checkbox('matprim1', '1'); }}
						{{ Form::label('matprim', 'MISMA LOCALIDAD') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('matprim2', '2'); }}
						{{ Form::label('matprim', 'OTRO MUNICIPIO') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('matprim3', '3'); }}
						{{ Form::label('matprim', 'CAPITAL DEL ESTADO') }}
					</div>

				</div>

				<div class="col-md-9">

					<h5>SUS PRODUCTOS LOS VENDE A NIVEL:</h5>
					<div class="col-md-3 form-group">
						{{ Form::checkbox('venta1', '4'); }}
						{{ Form::label('venta', 'NACIONAL') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('venta2', '5'); }}
						{{ Form::label('venta', 'ESTATAL') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('venta3', '6'); }}
						{{ Form::label('venta', 'REGIONAL') }}
					</div>

				</div>

				<div class="col-md-9">

					<h5>SUS COMPRADORES SON:</h5>
					<div class="col-md-3 form-group">
						{{ Form::checkbox('compr1', '7'); }}
						{{ Form::label('compr', 'MAYORISTAS') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('compr2', '8'); }}
						{{ Form::label('compr', 'MINORISTAS') }}
					</div>

					<div class="col-md-3 form-group">
						{{ Form::checkbox('compr3', '9'); }}
						{{ Form::label('compr', 'OTROS') }}
						
					</div>
				</div>
			</div>

					<div class="col-md-12 form-group">
					<div class="col-md-6 form-group">
						
						{{ Form::label('observ', 'OBSERVACIONES') }}
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-eye"></i></div>
						{{ Form::text('observ', null, array('placeholder' => 'Escriba las observaciones aquí','class' => 'form-control')) }}<br>
					</div>
					</div>
					</div>

					<div class="bg-orga col-md-12">DOCUMENTOS DEL ARTESANO</div>
					
					<div class="col-md-3 form-group">
						{{ Form::label('fotoimg', 'Foto del Artesano') }}
						{{ Form::file('fotoperfil',array('class' => 'filess')) }}
					</div>
					<div class="col-md-3 form-group">
						{{ Form::label('actaimg', 'Acta de Nacimiento') }}
						{{ Form::file('actapic',array('class' => 'filess')) }}
					</div>
					<div class="col-md-3 form-group">
						{{ Form::label('curpimg', 'CURP') }}
						{{ Form::file('curppic',array('class' => 'filess')) }}
					</div>
					<div class="col-md-3 form-group">
						{{ Form::label('ineimg', 'INE') }}
						{{ Form::file('inepic',array('class' => 'filess')) }}
					</div>
					
					<div class="col-md-12 form-group" style="margin-top: 10px;">
					<button type="submit" class="btn btn-ioa btn-lg pull-right">
						 Registrar 
						<span class="glyphicon glyphicon-ok"></span></button>
				</div>
				
			</div>
		{{Form::close()}}
	</div>

@stop

@section('scripts')
<script src="js/fileinput.js" type="text/javascript"></script>
	<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
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
	
		$(".filess").fileinput({
				showUpload: false,
				showCaption: false,
				showRemove : false,
				fileType: "any"
			});

			$(document).ready(function() {
				$("#test-upload").fileinput({
					'showPreview' : true,
					'allowedFileExtensions' : ['jpg','jpeg','png','gif'],
					'elErrorContainer': '#errorBlock'
				});

			$('#datetimePicker').datetimepicker({
		        language: 'es',
		        pickTime: false
		    });

		    $('#formalta').bootstrapValidator({
		        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
		        feedbackIcons: {
		            valid: 'glyphicon glyphicon-ok tok',
		            invalid: 'glyphicon glyphicon-remove tok',
		            validating: 'glyphicon glyphicon-refresh tok'
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
		                        format: 'YYYY-MM-DD'
		                    }
		                }
		            },
		            taller: {
		                validators: {
		                    notEmpty: {}
		                }
		            },
		            ine: {
		                validators: {
		                    stringLength: {
		                        min: 13,
		                        max:13,
		                        message:'Se requieren 13'
		                    }
		                }
		            },
                    sexo: {
                		validators: {
                    		notEmpty: {}
                    	}
                    },
		            civil: {
		                validators: {
		                    notEmpty: {}
		                }
		            },
		            tel: {
		                validators: {
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
		            },
                    fotoperfil:{
        				validators: {
        					file: {
        						extension: 'jpeg,png,jpg,gif',
        						type: 'image/jpg,image/jpeg,image/png,image/gif',
        						maxSize: 2048 * 1024,   // 2 MB
        					}
        				}
        			},
                curppic:{
        				validators: {
        					file: {
        						extension: 'jpeg,png,jpg,gif',
        						type: 'image/jpg,image/jpeg,image/png,image/gif',
        						maxSize: 2048 * 1024,   // 2 MB
        					}
        				}
        			},
                inepic:{
        				validators: {
        					file: {
        						extension: 'jpeg,png,jpg,gif',
        						type: 'image/jpg,image/jpeg,image/png,image/gif',
        						maxSize: 2048 * 1024,   // 2 MB
        					}
        				}
        			},
    			actapic:{
    				validators: {
    					file: {
    						extension: 'jpeg,png,jpg,gif',
    						type: 'image/jpg,image/jpeg,image/png,image/gif',
    						maxSize: 2048 * 1024,   // 2 MB
    					}
    				}
    			}
		        }
		    }
		    
		     )
		$('.mayuscula').focusout(function() {
				$(this).val($(this).val().toUpperCase());
			});
	});

$('#datetimePicker').on('dp.change dp.show', function(e) {
        $('#formalta').bootstrapValidator('revalidateField', 'fechanace');
    });
	</script>

<script>
	$( "#curp" ).focusout(function() {
		var curp = $(this).val();
		$.post('curp',{curp:curp}, function(json) {
			if (!json.success) {
				$('#idcurp').addClass('has-error');
				$('[name=curp]').val('');
				$('#formalta').bootstrapValidator('revalidateField','curp');
				$('[name=curp]').focus();
				$('[name=curp]').closest('div').find('small').html('La CURP '+curp+' ya se encuentra registrada');
			}
		}, 'json');
	})
	</script>

<script type="text/javascript" charset="utf-8">
$( "#selectmun" ).change(function () {
	$.post("<?php echo URL::to('artesano/municipio'); ?>", 'id='+$( "#selectmun option:selected" ).val(), function(json) {
		 $( "#selectloc" ).html('');
		$(json).each(function(){
			$( "#selectloc" ).append( '<option value="'+this.id+'">'+this.nombre+'</option>')
		});
	}, 'json');
}).change();
</script>


@stop

