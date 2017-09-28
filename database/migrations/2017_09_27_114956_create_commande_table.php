<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	public function up()
	{
		Schema::create('commande', function(Blueprint $table) {
			$table->increments('id_commande');
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->integer('id_livraison')->unsigned();
			$table->double('Montant');
			$table->string('Montant_livraison');
			$table->boolean('Payer');
		});
	}

	public function down()
	{
		Schema::drop('commande');
	}
}