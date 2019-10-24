<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class matricule extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
