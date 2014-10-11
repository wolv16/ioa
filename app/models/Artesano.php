<?php

class Artesano extends Eloquent {
public $timestamps = false;
protected $table = 'artesanos';
protected $fillable = array('RFC', 'estadocivil', 'fecharegistro', 'ife', 'taller', 'tipotelefono', 'persona_id');

public function persona(){
return $this->belongsTo('Persona');
}
public function organizacion(){
return $this->belongsToMany('Organizacion');
}
public function comite(){
return $this->belongsToMany('Comite')->withPivot('cargo');
}

public function Productos(){
return $this->hasMany('Producto');
}

public function Concursos(){
return $this->belongsToMany('Concurso')->withPivot('pieza','descripcionpremio','fecharegistro','numeroregistro','entregompieza','produccionmensual','costounitario','categoria');;
}
public function Talleres(){
return $this->belongsToMany('Taller');
}
public function Ferias(){
return $this->belongsToMany('Feria');
}
public function Comprayventas(){
return $this->belongsToMany('Comprasyventa');
}


}



