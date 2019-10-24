<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Urgence extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name','quartier_id', 'ville_id', 'phone', 'description', 'medecin_id', 'medecin_matricule', 'medecin_phone',
        'shortcode', 'datetime', 'transaction_id', 'expires', 'available_id', 'urgence_type', 'speciality_id'];

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

    public function medecin(){

        return $this->belongsTo('App\Medecin');

    }


    public function payment(){

        return $this->belongsTo('App\Payment');

    }

    public function available(){

        return $this->belongsTo('App\Available');

    }


}
