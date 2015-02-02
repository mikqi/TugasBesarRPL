<?php

class DetailKuesioner extends Eloquent {
	
	protected $fillable = array('id_kuesioner', 'id_pertanyaan');
    public $timestamps = false;

    protected $table = 'detail_kuesioner';

    public function getKeyName(){
        return "id_detail_kuesioner";
    }

    public function hasilKuesioner() {
        return $this->hasMany('HasilKuesioner');
    }
}