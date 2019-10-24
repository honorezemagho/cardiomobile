<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Medecin extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'ville_id', 'quartier_id', 'phone', 'matricule', 'email', 'quartier_medecin_id', 'datetime'
    , 'speciality_id', 'type_id', 'code_id', 'hopital_id', 'photo_id'];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'datetime',
    ];

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

    public  function  code(){

        return $this->belongsTo('App\Code');
    }

    public  function  speciality(){

        return $this->belongsTo('App\Speciality', 'speciality_id');
    }

    public  function  type(){

        return $this->belongsTo('App\MedecinsType', 'type_id');
    }

    public  function  hopital(){

        return $this->belongsTo('App\Hopital');
    }

    public  function  photo(){

        return $this->belongsTo('App\Photo');
    }

}
