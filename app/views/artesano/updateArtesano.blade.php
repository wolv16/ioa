@extends('layouts.baseartesanos')
	@section('titulo')BÚSQUEDA ARTESANO
	@endsection

		@section('contenido')
		<div class="container wellr">

			<div class="col-sm-4 wellr">
		
		{{ Form::open(array('id' => 'buscarartesano')) }}
		
			<div class="col-md-12">

				<div class="bg-orga col-md-12">BÚSQUEDA DE ARTESANOS</div>
				
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
		         	{{ Form::label('fechanace', 'Fecha de Nacimiento',array('class' => 'control-label')) }}
		          	<div class="input-group date" id="datetimePicker1">
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


	<div class="col-sm-8 pull-right hidden" id="datitos">
		{{ Form::open(array('role' => 'form','url'=> 'editarArtesano/update','id' => 'formupdate','class' => 'class','data-toggle' => 'validator', 'files'=>true)) }}
		<div class="bg-orga col-md-12">EDITAR DATOS DEL ARTESANO</div>

		<div class="col-md-2 hidden">
			<div class="col-md-12 form-group">			
			{{ Form::text('persona_id', null, array('id'=>'persona_id','class' => 'form-control')) }}
			</div>
		</div>
			
			<div class="col-md-12">			
			<div class="col-md-7 form-group">
				{{ Form::label ('nombre', 'Nombre Completo',array('class' => 'control-label')) }}
				{{ Form::text('nombre', null, array('id'=>'nombre','class' => 'form-control mayuscula')) }}
			</div>

			<div class="form-group col-md-5 fecha">
	          {{ Form::label('fechanace', 'Fecha de nacimiento',array('class' => 'control-label')) }}
	        <div class="input-group date" id="datetimePicker">
	            {{ Form::text('fechanace', null, array('id'=>'nace','class' => 'form-control', 'data-date-format' => 'YYYY-MM-DD')) }}
	            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	        </div>
	       	</div>
		</div>

		<div class="col-md-12">

			<div class="col-md-3 form-group">
				{{ Form::label('sexo', 'Sexo',array('class' => 'control-label')) }} 
				{{Form::select('sexo', array('' => 'Seleccione','Masculino' => 'Masculino','Femenino' => 'Femenino',), null, array('class' =>'form-control'))}}
			</div>

			<div class="col-md-3 form-group">
				
				{{ Form::label ('cuis', 'No. CUIS',array('class' => 'control-label')) }}
				{{ Form::text('cuis', null, array('id'=>'cuis','class' => 'form-control')) }}
			</div>
			<div class="col-md-3 form-group">
				{{ Form::label('grupoetnico', 'Grupo Étnico',array('class' => 'control-label')) }}
				{{ Form::select('grupoetnico', $grupos ,null,array('class' => 'form-control')) }}

			</div>

			

		</div>	

		<div class="col-md-12">
			<div class="col-md-3 form-group">
				{{ Form::label('civil', 'Estado Civil') }} 
				{{Form::select('civil', array('' => 'Seleccione','Soltero' => 'Soltero','Casado' => 'Casado',), null, array('class' =>'form-control'))}}
			</div>

			<div class="col-md-5 form-group">	
				{{ Form::label('curp', 'CURP') }}
				{{ Form::text('curp', null, array('class' => 'form-control mayuscula')) }}
			</div>

			<div class="col-md-4 form-group">	
				{{ Form::label('RFC', 'RFC') }}
				{{ Form::text('RFC', null, array('id'=>'rfc','class' => 'form-control mayuscula')) }}	
			</div>
	
		</div>

		<div class="col-md-12">
			<div class="col-md-6 form-group">	
				{{ Form::label('credencial', 'INE') }}
				{{ Form::text('ine', null, array('id'=>'ine','class' => 'form-control')) }}	
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('domicilio', 'Domicilio') }}
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-home"></i></div>
				{{ Form::text('domicilio', null, array('class' => 'form-control')) }}
				</div>
			</div>

		</div>

		<div class="col-md-12">
			<div class="form-group col-md-3">
				{{ Form::label('cp', 'C.P.') }}
				{{ Form::text('cp', null, array('class' => 'form-control')) }}
			</div>

			<div class="col-md-4 form-group">
				{{ Form::label('municipio', 'Municipio') }}
				{{ Form::select('municipio',$municipios, null, array('class' => 'form-control','id'=>'selectmun')) }} 
			</div>

			<div class="form-group col-md-5">
				{{ Form::label('localidad', 'Localidad') }}
				{{ Form::select('localidad',array(), null, array('class' => 'form-control', 'id'=>'selectloc')) }}
			</div>
		</div>

		<div class="col-md-12">
			<div class="col-md-4 form-group">
				{{ Form::label('lada', 'Lada') }}
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-phone"></i></div>
				{{ Form::text('lada', null, array('class' => 'form-control')) }}
			</div>
		</div>
			
			<div class="col-md-4 form-group">
				{{ Form::label('tel', 'Telefono') }}
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-phone"></i></div>
				{{ Form::text('tel', null, array('id'=>'tel','class' => 'form-control')) }}
			</div>
			</div>

			<div class="col-md-4 form-group">
			{{ Form::label('tipoTel', 'Tipo Teléfono') }} <br>
			{{Form::select('tipoTel', array('' => 'Seleccione','Casa' => 'Casa','Celular' => 'Celular','Caseta' => 'Caseta','Vecino' => 'Vecino',), null, array('class' =>'form-control'))}}
			</div>
		</div>
			
		<div class="col-md-12">

			<div class="col-md-5 form-group">
			{{ Form::label('taller', 'Tipo Taller') }} 
			{{Form::select('taller', array('' => 'Seleccione','Individual' => 'Individual','Familiar' => 'Familiar',), null, array('class' =>'form-control'))}}
			</div>

			<div class="col-md-5 form-group">
			
			{{ Form::label('rama', 'Rama Artesanal') }} 
			{{Form::select('rama', $ramas, null, array('class' =>'form-control'))}}
			</div>

			<div class="col-md-6 form-group">	
				{{ Form::label('observ', 'OBSERVACIONES') }}
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-eye"></i></div>
				{{ Form::text('observ', null, array('class' => 'form-control')) }}<br>
			</div>
			</div>
		</div>

		<div class="col-sm-12" id="documentos1">
			
			<div class="col-sm-12">
			<div class="col-md-3 col-md-offset-1 form-group">
				{{ Form::label('fotoimg', 'FOTO') }}
				{{ Form::file('fotoperfil',array('class' => 'filess')) }}
			</div>
			<div class="col-md-3 col-md-offset-3 form-group">
				{{ Form::label('actaimg', 'ACTA') }}
				{{ Form::file('actapic',array('class' => 'filess')) }}
			</div>
			</div>
			
			<div class="col-sm-12">
			<div class="col-md-2 col-md-offset-1 form-group">
				{{ Form::label('ineimg', 'INE') }}
				{{ Form::file('inepic',array('class' => 'filess')) }}
			</div>
			<div class="col-md-3 col-md-offset-4 form-group">
				{{ Form::label('curpimg', 'CURP') }}
				{{ Form::file('curppic',array('class' => 'filess')) }}
			</div>
			</div>
	
		</div>

		<div class="form-group" >
			<button type="submit" class="btn btn-primary btn-lg pull-right">
			<span class="glyphicon glyphicon-floppy-disk"></span> 
			Guardar
			</button>
		</div>
		{{Form::close()}}

		</div>

</div>
		
		@endsection


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
$('#datetimePicker1').datetimepicker({
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
	$.post($(this).attr('action'), $(this).serialize(), function(json) {
		console.log(json);
		$('#datitos, #documentos').removeClass("hidden");
			$('#persona_id').val(json.persona_id);
			$('#nombre').val(json.persona.nombre);
			$('#nace').val(json.persona.fechanacimiento);
			$('#curp').val(json.persona.curp);
			$('#cuis').val(json.persona.cuis);
			$('#cp').val(json.persona.cp);
			$('#tel').val(json.persona.telefono);
			$('#domicilio').val(json.persona.domicilio);
			$('#edo').val(json.persona.estado);
			$('#lada').val(json.persona.lada);
			$('#observ').val(json.persona.observaciones);
			$('#localidad').val(json.persona.localidad_id);
			$('#rfc').val(json.RFC);
			$('#fecha').val(json.fecharegistro);
			$('#ine').val(json.ine);
			$('[name = tipoTel] option[value='+json.tipotelefono+']').attr('selected', true);
			$('[name = sexo] option[value='+json.persona.sexo+']').attr('selected', true);
			$('[name = civil] option[value='+json.estadocivil+']').attr('selected', true);
			$('[name = taller] option[value='+json.taller+']').attr('selected', true);
			$('[name = grupoetnico] option[value='+json.persona.grupoetnico_id+']').attr('selected', true);
			$('[name = municipio] option[value='+json.municipio+']').attr('selected', true);
			$('[name = rama] option[value='+json.persona.rama_id+']').attr('selected', true);
			documentos(json.documentos);
	}, 'json').fail(function(){
		swal('Error','No se encontró el artesano','error');
	});
});
$('#formupdate').bootstrapValidator({
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
	})

$('#datetimePicker1').on('dp.change dp.show', function(e) {
$('#buscarartesano').bootstrapValidator('revalidateField', 'fechanace');
});

});

</script>

<script>
function documentos(documents){
var html='<div class="bg-orga col-md-12 text-center">DOCUMENTOS DEL ARTESANO</div>';
$(documents).each(function(){
	html += '<div class="container bg-docs col-md-7"><div class="col-md-7"><strong>'+this.nombre+'</strong><div class="col-md-7" style="text-align:center;"><img style="border: 0pt; margin-left: 0px; margin-bottom: 10px; margin-top: 15px; height: 200px; width: 150px;" src="'+this.ruta+'" onClick="window.open('+"'"+this.ruta+"'"+')";></img></div></div></div>';
}); 
$('#documentos').html(html);
}
</script>

<script>
$('.mayuscula').focusout(function() {
	$(this).val($(this).val().toUpperCase());
});
	

$('#datetimePicker').on('dp.change dp.show', function(e) {
    $('#formupdate').bootstrapValidator('revalidateField', 'fechanace');
});
</script>

<script type="text/javascript" charset="utf-8">
$( "#selectmun" ).change(function () {
	$.post("<?php echo URL::to('editarArtesano/municipio'); ?>", 'id='+$( "#selectmun option:selected" ).val(), function(json) {
		 $( "#selectloc" ).html('');
		$(json).each(function(){
			$( "#selectloc" ).append( '<option value="'+this.id+'">'+this.nombre+'</option>')
		});
	}, 'json');
}).change();
</script>
@stop 