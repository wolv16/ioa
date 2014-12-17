
@extends('layouts.baseartesanos')
    @section('titulo') REGISTROS AL PADRÓN
    @endsection 

@section('contenido')
    <div class="container wellr">
        <form class="form-horizontal" role="form">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="bg-orga col-md-12">REGISTRO DE ARTESANOS EN EL IOA</div>
                      
                      <div class="col-sm-6" style="text-align: center; margin: 0 auto;">

                          <a target="_self" href="artesano">
                            <img style="border: 0pt; margin-left: 0px; margin-bottom: 10px;" src="./imgs/user.png"></img><br>
                            {{ Form::label('pororg', 'REGISTRO ÚNICO') }}
                          </a>
                      </div>

                      <div class="col-sm-6" style="text-align: center; margin: 0 auto;">

                          <a  href="por">
                              <img style="border: 0pt; margin-left: 0px; margin-bottom: 10px;" src="./imgs/users.png"></img><br>
                              {{ Form::label('pororg', 'POR ORGANIZACIÓN') }}
                           
                          </a>
                      </div>

                    </div>
                
                
            </div>
        </form>
    </div>
@stop