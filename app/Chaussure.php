<?php

namespace App;

class Chaussure extends Eloquent {

	protected $table = 'chaussure';
	public $timestamps = false;
	protected $fillable = array('Marque', 'Couleur', 'Promotion', 'Reduction', 'Sexe', 'Type', 'Modele');

	public function taille()
	{
		return $this->hasMany('App\Taille');
	}

}