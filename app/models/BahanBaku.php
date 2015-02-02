<?php

class BahanBaku extends Eloquent {
	
	protected $fillable = array('nama_bahan', 'stok', 'tgl_masuk', 'tgl_kadaluarsa', 'id_pegawai');
    public $timestamps = false;

    protected $table = 'bahan_baku';

    public function getKeyName(){
        return "id_bahan";
    }

    public function pegawai() {
        return $this->belongsTo('Pegawai', 'id_pegawai');
    }

    public function menu(){
        return $this->belongsToMany('Menu', 'resep', 'id_bahan', 'id_menu');
    }
}