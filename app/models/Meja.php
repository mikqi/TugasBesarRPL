<?php

class Meja extends Eloquent {
	
	protected $fillable = array('status');
    public $timestamps = false;

    protected $table = 'meja';

    public function getKeyName(){
        return "no_meja";
    }

    public function pesanan() {
        return $this->hasOne('Pesanan');
    }
}