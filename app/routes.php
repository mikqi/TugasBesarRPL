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
Route::controller('api', 'ApiController');
 
App::missing(function($exception)
{
	return View::make('index');
});

Route::get('test', function(){
	return View::make('test');
});

Route::get('bahan/get/all', array('uses' => 'BahanController@getAllData'));
Route::get('bahan/get/{id}', array('uses' => 'BahanController@getData'));

Route::get('pegawai/get/all', array('uses' => 'PegawaiController@getAllData'));
Route::get('pegawai/get/{id}', array('uses' => 'PegawaiController@getData'));

Route::get('menu/get/all', array('uses' => 'MenuController@getAllData'));
Route::get('menu/get/kategori', array('uses' => 'MenuController@getKategori'));
Route::get('menu/get/{id}', array('uses' => 'MenuController@getData'));

Route::get('kuesioner/get/all', array('uses' => 'KuesionerController@getAllData'));
Route::get('kuesioner/get/{id}', array('uses' => 'KuesionerController@getData'));
Route::get('kuesioner/get/detail/all', array('uses' => 'KuesionerController@getAllDetail'));
Route::get('kuesioner/get/detail/{id}', array('uses' => 'KuesionerController@getDetail'));