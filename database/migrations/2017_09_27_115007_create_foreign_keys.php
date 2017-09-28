<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('commande', function(Blueprint $table) {
			$table->foreign('id_user')->references('id_user')->on('utilisateur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('commande', function(Blueprint $table) {
			$table->foreign('id_livraison')->references('id_livraison')->on('livraison')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ligneCommande', function(Blueprint $table) {
			$table->foreign('id_commande')->references('id_commande')->on('commande')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ligneCommande', function(Blueprint $table) {
			$table->foreign('id_chaussure')->references('id_chaussure')->on('chaussure')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('livraison', function(Blueprint $table) {
			$table->foreign('id_commande')->references('id_commande')->on('commande')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('taille', function(Blueprint $table) {
			$table->foreign('id_chaussure')->references('id_chaussure')->on('chaussure')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('commande', function(Blueprint $table) {
			$table->dropForeign('commande_id_user_foreign');
		});
		Schema::table('commande', function(Blueprint $table) {
			$table->dropForeign('commande_id_livraison_foreign');
		});
		Schema::table('ligneCommande', function(Blueprint $table) {
			$table->dropForeign('ligneCommande_id_commande_foreign');
		});
		Schema::table('ligneCommande', function(Blueprint $table) {
			$table->dropForeign('ligneCommande_id_chaussure_foreign');
		});
		Schema::table('livraison', function(Blueprint $table) {
			$table->dropForeign('livraison_id_commande_foreign');
		});
		Schema::table('taille', function(Blueprint $table) {
			$table->dropForeign('taille_id_chaussure_foreign');
		});
	}
}