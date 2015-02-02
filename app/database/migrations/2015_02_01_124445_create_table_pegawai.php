<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePegawai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawai', function(Blueprint $table)
		{
			$table->increments('id_pegawai');
			$table->string('nama', 31);
			$table->string('alamat', 101);
			$table->string('tempat_lahir', 21);
			$table->date('tgl_lahir');
			$table->enum('jk', array('Laki-laki','Perempuan'));
			$table->string('no_telp', 15);
			$table->string('email', 31);
			$table->enum('role', array('Admin','Kasir','Koki','Pelayan','Pantry','CS'));
			$table->string('password', 64);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pegawai');
	}

}
