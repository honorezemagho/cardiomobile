<?php

namespace App;
use App\Quartier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ville extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');
}

}
