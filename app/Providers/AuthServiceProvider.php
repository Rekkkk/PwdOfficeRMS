<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Model\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => AccountManagement::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

      //  Gate::define('update-post', [PostPolicy::class, 'update']);

        Gate::define('account.management', fn($user) => $user->account->is_super_admin);

        // Gate::define('account_management', function($user){
        //             // if($data->is_super_admin == 1){
        //             //     e true;
        //             // }
        //             // return false;
        //             echo $user;
        //     });

    }
}
