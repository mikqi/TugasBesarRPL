<?php

class KuesionerController extends BaseController {

	public function index()
	{
		$kuesioner = Kuesioner::all();
		return $kuesioner;
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
		$kuesioner = Kuesioner::find($id);
		return $kuesioner;
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