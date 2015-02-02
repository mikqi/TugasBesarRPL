<?php

class PegawaiController extends BaseController {

	public function index()
	{
		$pegawai = Pegawai::all();
		return $pegawai;
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		$pegawai = Pegawai::find($id);
		return Response::json($pegawai);
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