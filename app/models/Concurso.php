<?php

class Concurso extends Eloquent {
public $timestamps = false;
protected $table = 'concursos';
protected $fillable = array('nombre', 'fecha', 'nivel');

public function Personas(){
	return $this->belongsToMany('Persona')->withPivot('pieza','descripcionpremio','fecharegistro','numeroregistro','entregopieza','produccionmensual','costounitario','categoria');
}

public function Artesanos(){
	return $this->belongsToMany('Artesano')->withPivot('pieza','descripcionpremio','fecharegistro','numeroregistro','entregopieza','produccionmensual','costounitario','categoria');
}

}

