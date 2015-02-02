<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePesanan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesanan', function(Blueprint $table)
		{
			$table->increments('no_pesanan');
			$table->date('tgl_pesanan');
			$table->integer('jumlah');

			$table->integer('no_meja')->unsigned();
			$table->integer('id_pegawai')->unsigned();

			$table->foreign('no_meja')->references('no_meja')->on('meja');
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
		Schema::drop('pesanan');
	}

}
