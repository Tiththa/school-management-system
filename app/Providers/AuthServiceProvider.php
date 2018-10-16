<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
          return $user->role == 'Admin';
        });

        $gate->define('isManager', function($user){
          return $user->role == 'Teacher';
        });

        $gate->define('isStudent', function($user){
          return $user->role == 'Student';
        });
        $gate->define('isLibrarian', function($user){
          return $user->role == 'Librarian';
        });
        $gate->define('isAlumni', function($user){
          return $user->role == 'Alumni';
        });
        $gate->define('isAccountant', function($user){
          return $user->role == 'Accountant';
        });



    }
}
