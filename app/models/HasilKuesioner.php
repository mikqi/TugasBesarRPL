<?php

class HasilKuesioner extends Eloquent {
	
	protected $fillable = array('jawaban_satu', 'jawaban_dua', 'jawaban_tiga', 'jawaban_empat', 'jawaban_lima', 'id_detail_kuesioner');
    public $timestamps = false;

    protected $table = 'hasil_kuesioner';

    public function getKeyName(){
        return "id_hasil";
    }

    public function detailKuesioner() {
        return $this->belongsTo('DetailKuesioner', 'id_detail_kuesioner');
    }
}