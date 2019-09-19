<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //
    protected  $fillable = ['speciality'];

    public function medecin(){
        return $this->belongsTo('App\Medecin');
    }
}
