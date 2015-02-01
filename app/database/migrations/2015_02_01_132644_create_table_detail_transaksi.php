<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailTransaksi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_transaksi', function(Blueprint $table)
		{
			$table->increments('id_detail_transaksi');

			$table->integer('no_pesanan')->unsigned();
			$table->integer('id_menu')->unsigned();

			$table->integer('subtotal');
			$table->integer('total');
			$table->integer('bayar');
			$table->integer('kembali');

			$table->integer('id_pegawai')->unsigned();

			$table->foreign('no_pesanan')->references('no_pesanan')->on('pesanan');
			$table->foreign('id_menu')->references('id_menu')->on('menu');
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
		Schema::drop('detail_transaksi');
	}

}
