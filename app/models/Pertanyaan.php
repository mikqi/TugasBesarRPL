<?php

class Pertanyaan extends Eloquent {
	
	protected $fillable = array('pertanyaan');
    public $timestamps = false;

    protected $table = 'pertanyaan';

    public function getKeyName(){
        return "id_pertanyaan";
    }

    public function kuesioner() {
        return $this->belongsToMany('Kuesioner', 'detail_kuesioner', 'id_pertanyaan', 'id_kuesioner');
    }
}