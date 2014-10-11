<?php

class Feria extends Eloquent {
public $timestamps = false;
protected $table ='ferias';
protected $fillable = array('nombre', 'fecha', 'tipo');

public function Artesanos(){
return $this->belongsToMany('Artesano');
}
}

