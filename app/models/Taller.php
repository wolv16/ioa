<?php

class Taller extends Eloquent {
public $timestamps = false;
protected $table = 'talleres';
protected $fillable = array('nombre','fecha','maestro')

public function Artesanos(){
return $this->belongsToMany('Artesano');
}
}

