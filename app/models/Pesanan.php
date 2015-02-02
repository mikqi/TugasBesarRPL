<?php

class Pesanan extends Eloquent {
	
	protected $fillable = array('tgl_pesanan', 'jumlah', 'no_meja', 'id_pegawai');
    public $timestamps = false;

    protected $table = 'pesanan';

    public function getKeyName(){
        return "no_pesanan";
    }

    public function meja(){
        return $this->belongsTo('Meja', 'id_meja');
    }

    public function pegawai() {
        return $this->belongsTo('Pegawai', 'id_pegawai');
    }

    public function menu(){
        return $this->belongsToMany('Menu', 'detail_transaksi', 'no_pesanan', 'id_menu');
    }
}