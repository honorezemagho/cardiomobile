<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ville;
use App\Quartier;
use App\Medecin;
use App\Transaction;

class Urgence extends Model
{
    protected $fillable = ['name','quartier_id', 'ville_id', 'phone', 'description', 'medecin_matricule', 'medecin_phone', 'shortcode'
        , 'datetime', 'transaction_id', 'expires', 'meeting_datetime', 'urgence_type'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phone(){

        return $this->belongsTo('App\Medecin', 'medecin_phone');
    }


    public function transaction(){

        return $this->belongsTo('App\Transaction');

    }
}
