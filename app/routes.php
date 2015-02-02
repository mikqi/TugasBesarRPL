<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::controller('api', 'ApiController');
 
App::missing(function($exception)
{
	return View::make('index');
});

Route::get('test', function(){
	return View::make('test');
});



Route::group(array('prefix' => 'api'), function() {

	Route::post('login/auth','AuthController@login');
    Route::get('login/destroy','AuthController@logout');

    Route::resource('bahan', 'BahanController');

	Route::resource('pegawai', 'PegawaiController');

	Route::resource('menu', 'MenuController');

	Route::resource('kuesioner', 'KuesionerController');

	Route::resource('detail_kuesioner', 'DetailKuesionerController');

	Route::resource('pesanan', 'PesananController');

	Route::resource('pertanyaan', 'PertanyaanController');

	Route::resource('resep', 'ResepController');

	Route::resource('transaksi', 'TransaksiController');

	Route::resource('kategori', 'KategoriController');

	Route::resource('hasil', 'HasilKuesionerController');
});
