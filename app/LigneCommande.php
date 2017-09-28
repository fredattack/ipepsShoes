<?php

namespace App;

class LigneCommande extends Eloquent {

	protected $table = 'ligneCommande';
	public $timestamps = false;
	protected $fillable = array('Quantite', 'id_commande', 'Taille', 'id_chaussure');

	public function commande()
	{
		return $this->belongsTo('App\Commande');
	}

}