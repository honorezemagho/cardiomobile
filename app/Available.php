<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    //
    protected $fillable = [
        'datetime', 'medecin_id', 'expires', 'quartier_id', 'type_id', 'speciality_id'
    ];



    public  function medecin(){
        return $this->belongsTo('App\Medecin');
    }

    public  function  speciality(){

        return $this->belongsTo('App\Speciality', 'speciality_id');
    }

}
