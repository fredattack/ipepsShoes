<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chaussure extends Model 
{

    protected $table = 'chaussures';
    public $timestamps = false;
    protected $fillable = array('marque', 'couleur', 'promotion', 'reduction', 'sexe', 'type', 'modele');

    public function taille()
    {
        return $this->hasMany('App\Taille');
    }

}