<?php

class MenuController extends BaseController {

	public function index()
	{
		$menu = Menu::all();
		return $menu;
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
		$menu = Menu::find($id);
		return $menu;
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