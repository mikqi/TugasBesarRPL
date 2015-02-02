<?php

class Kuesioner extends Eloquent {
	
	protected $fillable = array('tgl_kuesioner', 'id_pegawai');
    public $timestamps = false;

    protected $table = 'kuesioner';

    public function getKeyName(){
        return "id_kuesioner";
    }

    public function pegawai() {
        return $this->belongsTo('Pegawai', 'id_pegawai');
    }

    public function pertanyaan() {
        return $this->belongsToMany('Pertanyaan', 'detail_kuesioner', 'id_kuesioner', 'id_pertanyaan');
    }
}