<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arrondissement extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'ville_id'];

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }
}
