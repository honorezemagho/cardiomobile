<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Hopital;
use App\Ville;
use App\Quartier;
use App\Structure;



class Ambulance extends Model
{
    use SoftDeletes;


    protected  $fillable = ['name', 'hopital_id', 'quartier_id', 'ville_id', 'phone', 'matricule'];

    protected $dates = ['deleted_at'];


    public function hopital(){

        return $this->belongsTo('App\Hopital');
    }


    public function ville(){

return $this->belongsTo('App\Ville');

    }

    public function structure(){

        return $this->belongsTo('App\Structure');

    }

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

}
