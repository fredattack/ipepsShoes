<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model 
{

    protected $table = 'livraisons';
    public $timestamps = false;
    protected $fillable = array('distance', 'statut', 'id_commande');

    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }

}