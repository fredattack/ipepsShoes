<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('commandes', function(Blueprint $table) {
			$table->foreign('id_livraison')->references('id_livraison')->on('livraisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ligneCommandes', function(Blueprint $table) {
			$table->foreign('id_commande')->references('id_commande')->on('commandes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ligneCommandes', function(Blueprint $table) {
			$table->foreign('id_chaussure')->references('id_chaussure')->on('chaussures')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('livraisons', function(Blueprint $table) {
			$table->foreign('id_commande')->references('id_commande')->on('commandes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tailles', function(Blueprint $table) {
			$table->foreign('id_chaussure')->references('id_chaussure')->on('chaussures')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('commandes', function(Blueprint $table) {
			$table->dropForeign('commandes_id_livraison_foreign');
		});
		Schema::table('ligneCommandes', function(Blueprint $table) {
			$table->dropForeign('ligneCommandes_id_commande_foreign');
		});
		Schema::table('ligneCommandes', function(Blueprint $table) {
			$table->dropForeign('ligneCommandes_id_chaussure_foreign');
		});
		Schema::table('livraisons', function(Blueprint $table) {
			$table->dropForeign('livraisons_id_commande_foreign');
		});
		Schema::table('tailles', function(Blueprint $table) {
			$table->dropForeign('tailles_id_chaussure_foreign');
		});
	}
}