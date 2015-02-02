<?php

class KuesionerController extends BaseController {
	
	public $restful = true;

	public function getAllData()
	{
		$kuesioner = Kuesioner::all();
		return Response::json($kuesioner);
	}

	public function getData($id)
	{
		$kuesioner = Kuesioner::find($id);
		return Response::json($kuesioner);
	}

	public function getAllDetail()
	{
		$detail = DetailKuesioner::all();
		return Response::json($detail);
	}

	public function getDetail($id)
	{
		$detail = DetailKuesioner::find($id);
		return Response::json($detail);
	}
}