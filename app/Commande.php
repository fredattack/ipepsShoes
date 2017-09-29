<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model 
{

    protected $table = 'commandes';
    public $timestamps = true;
    protected $fillable = array('id_user', 'id_livraison', 'montant', 'montant_livraison', 'payer');

    public function ligneCommande()
    {
        return $this->hasMany('App\LigneCommande');
    }

    public function livraison()
    {
        return $this->hasOne('App\Livraison');
    }

}