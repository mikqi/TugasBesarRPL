<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu', function(Blueprint $table)
		{
			$table->increments('id_menu');
			$table->string('nama_menu', 51);
			$table->integer('harga');

			$table->integer('id_kategori')->unsigned();
			$table->integer('id_pegawai')->unsigned();

			$table->foreign('id_kategori')->references('id_kategori')->on('kategori');
			$table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu');
	}

}
