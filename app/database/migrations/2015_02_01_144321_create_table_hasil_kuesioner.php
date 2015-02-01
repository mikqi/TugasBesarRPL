<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHasilKuesioner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hasil_kuesioner', function(Blueprint $table)
		{
			$table->increments('id_hasil');
			$table->string('jawaban_satu');
			$table->string('jawaban_dua');
			$table->string('jawaban_tiga');
			$table->string('jawaban_empat');
			$table->string('jawaban_lima');

			$table->integer('id_detail_kuesioner')->unsigned();

			$table->foreign('id_detail_kuesioner')->references('id_detail_kuesioner')->on('detail_kuesioner');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hasil_kuesioner');
	}

}
