<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quartier extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'ville_id', 'arrondissement_id'];

    public function ville(){

        return $this->belongsTo('App\Ville');

    }


    public function arrondissement(){

        return $this->belongsTo('App\Arrondissement');

    }

}

