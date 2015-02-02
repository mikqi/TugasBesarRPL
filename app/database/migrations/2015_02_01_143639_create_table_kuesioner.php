<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKuesioner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kuesioner', function(Blueprint $table)
		{
			$table->increments('id_kuesioner');
			$table->date('tgl_kuesioner');

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
		Schema::drop('kuesioner');
	}

}
