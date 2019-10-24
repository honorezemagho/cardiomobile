<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as Gatecontract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gatecontract $gate)
    {

        $this->registerPolicies($gate);

        $gate->define('is_admin', function ($user){
        return $user->role_id == 1;
    });

        $gate->define('is_gestionnaire', function ($user){
            return $user->role_id == 2;
        });

        $gate->define('is_medecin', function ($user){
            return $user->role_id == 3;
        });

        Passport::routes();
    }
}
