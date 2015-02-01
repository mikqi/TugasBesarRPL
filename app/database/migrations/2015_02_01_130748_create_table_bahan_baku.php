<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBahanBaku extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bahan_baku', function(Blueprint $table)
		{
			$table->increments('id_bahan');
			$table->string('nama_bahan', 51);
			$table->integer('stok');
			$table->date('tgl_masuk');
			$table->date('tgl_kadaluarsa');

			$table->integer('id_pegawai')->unsigned();

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
		Schema::drop('bahan_baku');
	}

}
