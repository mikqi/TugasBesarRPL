<?php

class DetailTransaksi extends Eloquent {
	
	protected $fillable = array('no_pesanan', 'id_menu', 'subtotal', 'total', 'bayar', 'kembali', 'id_pegawai');
    public $timestamps = false;

    protected $table = 'detail_transaksi';

    public function getKeyName(){
        return "id_detail_transaksi";
    }

    public function pegawai() {
        return $this->belongsTo('Pegawai', 'id_pegawai');
    }
}