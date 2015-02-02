<?php

class TransaksiController extends BaseController {

	public function index()
	{
		$detail = DetailTransaksi::all();
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
		$detail = DetailTransaksi::find($id);
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