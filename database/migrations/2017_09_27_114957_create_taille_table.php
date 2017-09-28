<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTailleTable extends Migration {

	public function up()
	{
		Schema::create('taille', function(Blueprint $table) {
			$table->integer('id_chaussure')->unsigned();
			$table->integer('Pointure');
			$table->integer('Stock');
		});
	}

	public function down()
	{
		Schema::drop('taille');
	}
}