<?php

class PegawaiController extends BaseController {

	public function index()
	{
		$pegawai = Pegawai::all();
		return $pegawai;
	}

	public function create()
	{
		$pegawai = new Pegawai;
		$pegawai->nama = Input::get('nama');
		$pegawai->alamat = Input::get('alamat');
		$pegawai->tempat_lahir = Input::get('tempat_lahir');
		$pegawai->tgl_lahir = Input::get('tgl_lahir');
		$pegawai->jk = Input::get('jk');
		$pegawai->no_telp = Input::get('no_telp');
		$pegawai->email = Input::get('email');
		$pegawai->role = Input::get('role');
		$pegawai->password = Hash::make(Input::get('password'));
		$pegawai->save();

		return Response::json(array('success' => true));
	}

	public function store()
	{
		
	}

	public function show($id)
	{
		$pegawai = Pegawai::find($id);
		return $pegawai;
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		Pegawai::destroy($id);
		return Response::json(array('success' => true));
	}
}