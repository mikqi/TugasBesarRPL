<?php

class BahanController extends BaseController {

	public function index()
	{
		$bahan = BahanBaku::all();
		return $bahan;
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
		$bahan = BahanBaku::find($id);
		return $bahan;
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