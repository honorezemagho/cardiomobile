<?php

namespace App;
use App\Quartier;
use App\Ville;
use App\Structure;
use App\Hopital;
use App\Medecin;
use App\Vehicule;
use App\Ambulance;

use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    //
    protected $fillable = ['name','quartier_id_start', 'ville_id_start', 'quartier_id_stop', 'ville_id_stop', 'phone', 'description
    , confirm_matricule, confirm_phone, transaction_id, erxpires'];

    public  function ville_start(){
        return $this->belongsTo('App\Ville', 'ville_id_start');
    }

    public  function ville_stop(){
        return $this->belongsTo('App\Ville', 'ville_id_stop');
    }


    public  function quartier_start() {
        return $this->belongsTo('App\Quartier', 'quartier_id_start');
    }

    public  function quartier_stop(){
        return $this->belongsTo('App\Quartier', 'quartier_id_stop');
    }

    public function user(){

        return $this->belongsTo('App\User');

    }
    public function itineraire(){

        return $this->belongsTo('App\Itineraire');

    }

    public function transaction(){

        return $this->belongsTo('App\Transaction');

    }
}
