<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Structure extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected  $fillable = ['name', 'quartier_id', 'ville_id'];
}
