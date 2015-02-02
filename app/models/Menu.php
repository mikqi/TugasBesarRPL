<?php

class Menu extends Eloquent {
	
	protected $fillable = array('nama_menu', 'harga', 'id_kategori', 'id_pegawai');
    public $timestamps = false;

    protected $table = 'menu';

    public function getKeyName(){
        return "id_menu";
    }

    public function kategori() {
        return $this->belongsTo('Kategori', 'id_kategori');
    }

    public function pegawai(){
        return $this->belongsTo('Pegawai', 'id_pegawai');
    }

    public function pesanan(){
        return $this->belongsToMany('Pesanan', 'detail_transaksi', 'id_menu', 'no_pesanan');
    }

    public function bahan(){
        return $this->belongsToMany('BahanBaku', 'resep', 'id_menu', 'id_bahan');
    }
}