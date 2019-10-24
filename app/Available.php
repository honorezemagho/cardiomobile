<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Available extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at', 'datetime'];

    protected $fillable = [
        'datetime', 'medecin_id', 'expires', 'quartier_id', 'type_id', 'speciality_id', 'price',
    ];



    public  function medecin(){
        return $this->belongsTo('App\Medecin');
    }

    public  function  speciality(){

        return $this->belongsTo('App\Speciality', 'speciality_id');
    }

}
