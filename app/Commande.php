<?php

namespace App;

class Commande extends Eloquent {

	protected $table = 'commande';
	public $timestamps = true;
	protected $fillable = array('id_user', 'id_livraison', 'Montant', 'Montant_livraison', 'Payer');

	public function ligneCommande()
	{
		return $this->hasMany('App\LigneCommande');
	}

	public function livraison()
	{
		return $this->hasOne('App\Livraison');
	}

	public function User()
	{
		return $this->hasOne('App\Utilisateur');
	}

}