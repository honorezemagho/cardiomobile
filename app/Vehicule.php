<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected  $fillable = ['name', 'owner', 'ville_id', 'quartier_id', 'phone', 'matricule'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public function user(){

        return $this->belongsTo('App\User');

        }
    public function itineraire(){

        return $this->belongsTo('App\Itineraire');

    }

}
