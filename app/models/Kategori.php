<?php

class Kategori extends Eloquent {
	
	protected $fillable = array('nama_kategori');
    public $timestamps = false;

    protected $table = 'kategori';

    public function getKeyName(){
        return "id_kategori";
    }

    public function menu() {
        return $this->hasMany('Menu');
    }
}