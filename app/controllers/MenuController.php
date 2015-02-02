<?php

class MenuController extends BaseController {
	
	public $restful = true;

	public function getAllData()
	{
		$menu = Menu::with('kategori')->with('pegawai')->get();
		
		return Response::json($menu);
	}

	public function getData($id)
	{
		$menu = Menu::find($id);
		$id = $menu->id_menu;
		$nama = $menu->nama_menu;
		$harga = $menu->harga;
		$kat = $menu->kategori;
		$peg = $menu->pegawai;

		return Response::json(array('id' => $id, 'nama_menu' => $nama, 'harga' => $harga, 'kategori' => $kat->nama_kategori, 'pegawai' => $peg->nama));
	}

	public function getKategori()
	{
		$kat = Kategori::all();

		return Response::json($kat);
	}
}