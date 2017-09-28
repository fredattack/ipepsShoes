<?php

namespace App;

class Taille extends Eloquent {

	protected $table = 'taille';
	public $timestamps = false;
	protected $fillable = array('id_chaussure', 'Pointure', 'Stock');

	public function chaussure()
	{
		return $this->belongsTo('App\Chaussure');
	}

}