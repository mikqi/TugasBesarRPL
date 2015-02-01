<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResep extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resep', function(Blueprint $table)
		{
			$table->integer('id_menu')->unsigned();
			$table->integer('id_bahan')->unsigned();

			$table->foreign('id_menu')->references('id_menu')->on('menu');
			$table->foreign('id_bahan')->references('id_bahan')->on('bahan_baku');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resep');
	}

}
