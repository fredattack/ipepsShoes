<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivraisonsTable extends Migration {

	public function up()
	{
		Schema::create('livraisons', function(Blueprint $table) {
			$table->increments('id_livraison');
			$table->double('distance');
			$table->boolean('statut');
			$table->integer('id_commande')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('livraisons');
	}
}