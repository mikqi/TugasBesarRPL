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
			$table->string('jawaban_satu', 31);
			$table->string('jawaban_dua', 31);
			$table->string('jawaban_tiga', 31);
			$table->string('jawaban_empat', 31);
			$table->string('jawaban_lima', 31);

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
