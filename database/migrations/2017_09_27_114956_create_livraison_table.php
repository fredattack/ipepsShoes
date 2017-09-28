<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivraisonTable extends Migration {

	public function up()
	{
		Schema::create('livraison', function(Blueprint $table) {
			$table->increments('id_livraison');
			$table->double('Distance');
			$table->boolean('Statut');
			$table->integer('id_commande')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('livraison');
	}
}