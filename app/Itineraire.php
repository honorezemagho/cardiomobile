<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Itineraire extends Model
{
    //

    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
