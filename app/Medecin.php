<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Quartier;
use App\Ville;
use App\Structure;

class Medecin extends Model
{
    protected $fillable = ['name', 'ville_id', 'quartier_id', 'phone', 'matricule', 'email'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public  function  structure(){

        return $this->belongsTo('App\Structure');
    }

    public  function  role(){

        return $this->belongsTo('App\Role');
    }

}
