<?php

class PegawaiController extends BaseController {
	
	public $restful = true;

	public function getAllData()
	{
		$pegawai = Pegawai::all(); 
		return Response::json($pegawai);
	}

	public function getData($id)
	{
		$pegawai = Pegawai::find($id);
		return Response::json($pegawai);
	}
}