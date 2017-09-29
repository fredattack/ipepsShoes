<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLigneCommandesTable extends Migration {

	public function up()
	{
		Schema::create('ligneCommandes', function(Blueprint $table) {
			$table->increments('id_ligneCommande');
			$table->integer('quantite');
			$table->integer('id_commande')->unsigned();
			$table->integer('taille');
			$table->integer('id_chaussure')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ligneCommandes');
	}
}