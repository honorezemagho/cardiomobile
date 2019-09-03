<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Ville;
use App\Quartier;
use App\Photo;
use App\Post;
use App\Medecin;
use App\Available;
use App\matricule;
use App\Hopital;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','is_active','role_id','email_verified_at', 'api_token', 'photo_id', 'medecin_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function role(){
        return $this->belongsTo('App\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function photo(){
        return $this->belongsTo('App\Photo');
    }


    public function posts(){

        return $this->hasMany('App\Post');

    }

    public  function isAdmin(){

        if($this->role->name == 'Administrateur'){

            return true;

        }
            return false;
    }

    public  function isGestionnaire(){

        if($this->role->name == 'Gestionnaire'){

            return true;

        }
        return false;
    }

    public  function isMedecin(){

        if($this->role->name == 'Medecins'){

            return true;

        }
        return false;
    }

    public  function medecin(){

       return $this->belongsTo('App\Medecin');
    }
}
