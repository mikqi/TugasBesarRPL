<?php

class DetailKuesionerController extends BaseController {

	public function index()
	{
		$detail = DetailKuesioner::all();
		return $detail;
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
		$detail = DetailKuesioner::find($id);
		return $detail;
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