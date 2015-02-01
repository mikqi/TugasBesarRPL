<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailKuesioner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_kuesioner', function(Blueprint $table)
		{
			$table->increments('id_detail_kuesioner');

			$table->integer('id_kuesioner')->unsigned();
			$table->integer('id_pertanyaan')->unsigned();

			$table->foreign('id_kuesioner')->references('id_kuesioner')->on('kuesioner');
			$table->foreign('id_pertanyaan')->references('id_pertanyaan')->on('pertanyaan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detail_kuesioner');
	}

}
