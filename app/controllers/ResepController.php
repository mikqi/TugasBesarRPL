<?php

class ResepController extends BaseController {

	public function index()
	{
		$resep = Resep::all();
		return $resep;
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