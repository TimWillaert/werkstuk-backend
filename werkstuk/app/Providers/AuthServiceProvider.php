<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\AuthCode;
use Laravel\Passport\Client;
use Laravel\Passport\Passport;
use Laravel\Passport\PersonalAccessClient;
use Laravel\Passport\Token;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        Passport::useTokenModel(Token::class);
        Passport::useClientModel(Client::class);
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);

        Gate::define('access-users', function($user){
            if ($user->role == 'Admin') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-sessions', function($user){
            if ($user->role == 'Admin' || $user->role == 'Planner') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-speakers', function($user){
            if ($user->role == 'Admin' || $user->role == 'Planner') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-keywords', function($user){
            if ($user->role == 'Admin' || $user->role == 'Planner') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-timetable', function($user){
            if ($user->role == 'Admin' || $user->role == 'Planner') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-partners', function($user){
            if ($user->role == 'Admin' || $user->role == 'Finance') {
                return true;
            } else{
                return false;
            }
        });

        Gate::define('access-tickets', function($user){
            if ($user->role == 'Admin' || $user->role == 'Finance') {
                return true;
            } else{
                return false;
            }
        });
    }
}
