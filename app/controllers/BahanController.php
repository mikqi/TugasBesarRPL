<?php

class PantryController extends BaseController {

	public $restful = true;

	public function getAllData()
	{
		$bahan = BahanBaku::all(); 
		return Response::json($bahan);
	}

	public function getData($id)
	{
		$bahan = BahanBaku::find($id);
		return Response::json($bahan);
	}

}
