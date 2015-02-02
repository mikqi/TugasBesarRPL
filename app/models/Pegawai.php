<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pegawai extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = array('nama', 'alamat', 'tempat_lahir', 'tgl_lahir', 'jk', 'no_telp', 'email', 'role', 'password');
    public $timestamps = false;

    protected $table = 'pegawai';

    protected $hidden = array('password');

    public function getKeyName(){
        return "id_pegawai";
    }

    public function pesanan(){
        return $this->hasMany('Pesanan');
    }

    public function menu(){
        return $this->hasMany('Menu');
    }

    public function detailTransaksi(){
        return $this->hasMany('DetailTransaksi');
    }

    public function bahanBaku(){
        return $this->hasMany('BahanBaku');
    }

    public function kuesioner(){
        return $this->hasMany('Kuesioner');
    }

    public function getRememberToken()
    {
        return null; // not supported
    }

    public function setRememberToken($value)
    {
        // not supported
    }

    public function getRememberTokenName()
    {
        return null; // not supported
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }
}