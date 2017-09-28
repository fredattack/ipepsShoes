<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLigneCommandeTable extends Migration {

	public function up()
	{
		Schema::create('ligneCommande', function(Blueprint $table) {
			$table->integer('Quantite');
			$table->integer('id_commande')->unsigned();
			$table->integer('Taille');
			$table->integer('id_chaussure')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ligneCommande');
	}
}