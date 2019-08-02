<?php

namespace App;
use App\Quartier;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
    protected $fillable = ['name'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');
}

}
