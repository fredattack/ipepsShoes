<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandesTable extends Migration {

	public function up()
	{
		Schema::create('commandes', function(Blueprint $table) {
			$table->increments('id_commande');
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->integer('id_livraison')->unsigned();
			$table->double('montant');
			$table->string('montant_livraison');
			$table->boolean('payer');
		});
	}

	public function down()
	{
		Schema::drop('commandes');
	}
}