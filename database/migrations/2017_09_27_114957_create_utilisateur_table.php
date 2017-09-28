<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateurTable extends Migration {

	public function up()
	{
		Schema::create('utilisateur', function(Blueprint $table) {
			$table->increments('id_user');
			$table->timestamps();
			$table->string('Nom', 200);
			$table->string('Prenom', 200);
			$table->string('Email', 200);
			$table->string('Adresse', 200);
			$table->string('Localite', 200);
			$table->integer('Niveau');
			$table->boolean('Email_confirmation');
		});
	}

	public function down()
	{
		Schema::drop('utilisateur');
	}
}