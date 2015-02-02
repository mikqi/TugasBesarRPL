<?php

class PesananController extends BaseController {

	public function index()
	{
		$pesan = Pesanan::all();
		return $pesan;
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
		$pesan = Pesanan::find($id);
		return $pesan;
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