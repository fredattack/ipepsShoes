<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taille extends Model 
{

    protected $table = 'tailles';
    public $timestamps = false;
    protected $fillable = array('id_chaussure', 'pointure', 'stock');

    public function chaussure()
    {
        return $this->belongsTo('App\Chaussure');
    }

}