<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChaussuresTable extends Migration {

	public function up()
	{
		Schema::create('chaussures', function(Blueprint $table) {
			$table->increments('id_chaussure');
			$table->string('marque', 200);
			$table->string('couleur', 200);
			$table->boolean('promotion');
			$table->double('reduction');
			$table->string('sexe', 200);
			$table->string('type', 200);
			$table->string('modele', 200);
		});
	}

	public function down()
	{
		Schema::drop('chaussures');
	}
}