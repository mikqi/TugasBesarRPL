<?php

class HasilKuesionerController extends BaseController {

	public function index()
	{
		$hasil = HasilKuesioner::all();
		return $hasil;
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
		$hasil = HasilKuesioner::find($id);
		return $hasil;
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
		//
	}
}