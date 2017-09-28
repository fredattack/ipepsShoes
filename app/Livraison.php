<?php

namespace App;

class Livraison extends Eloquent {

	protected $table = 'livraison';
	public $timestamps = false;
	protected $fillable = array('Distance', 'Statut', 'id_commande');

	public function commande()
	{
		return $this->belongsTo('App\Commande');
	}

}