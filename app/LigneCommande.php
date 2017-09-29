<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model 
{

    protected $table = 'ligneCommandes';
    public $timestamps = false;
    protected $fillable = array('quantite', 'id_commande', 'taille', 'id_chaussure');

    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }

}