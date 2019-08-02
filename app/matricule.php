<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ambulance;
use App\Medecin;
use App\Vehicule;
use App\Quartier;
use App\Ville;

class matricule extends Model
{
    //
    protected $fillable = ['name','medecin_id', 'vehicule_id', 'ambulance_id'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public function vehicule(){

        return $this->belongsTo('App\Vehicule');

    }

    public function medecin(){

        return $this->belongsTo('App\Medecin');

    }

    public function ambulance(){

        return $this->belongsTo('App\Ambulance');

    }

}
