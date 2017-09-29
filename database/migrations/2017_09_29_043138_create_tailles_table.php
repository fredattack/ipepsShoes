<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaillesTable extends Migration {

	public function up()
	{
		Schema::create('tailles', function(Blueprint $table) {
			$table->integer('id_chaussure')->unsigned();
			$table->integer('pointure');
			$table->integer('stock');
		});
	}

	public function down()
	{
		Schema::drop('tailles');
	}
}