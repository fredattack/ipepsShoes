<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChaussureTable extends Migration {

	public function up()
	{
		Schema::create('chaussure', function(Blueprint $table) {
			$table->increments('id_chaussure');
			$table->string('Marque', 200);
			$table->string('Couleur', 200);
			$table->boolean('Promotion');
			$table->double('Reduction');
			$table->string('Sexe', 200);
			$table->string('Type', 200);
			$table->string('Modele', 200);
		});
	}

	public function down()
	{
		Schema::drop('chaussure');
	}
}