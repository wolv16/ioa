<?php

class Organizacion extends Eloquent {
public $timestamps = false;
protected $table = 'organizacion';
protected $fillable = array('nombre', 'telmunicipio');

public function Comite(){
return $this->hasOne('Comite');
}
public function Artesanos(){
return $this->belongsToMany('Artesanos');
}
}

