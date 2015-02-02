<?php

class PertanyaanController extends BaseController {

	public function index()
	{
		$pertanyaan = Pertanyaan::all();
		return $pertanyaan;
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
		$pertanyaan = Pertanyaan::find($id);
		return $pertanyaan;
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