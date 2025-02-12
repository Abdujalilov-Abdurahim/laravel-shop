<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    
    /**
     * Register services.
     */

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('manage-products', function ($user) {
            return $user instanceof Admin;
        });
    }

    //     // Oddiy userlar uchun ruxsat
    //     Gate::define("user-access", function (User $user) {
    //         return $user instanceof User;
    //     });

    // // Adminlar uchun ruxsat
    // Gate::define("admin-access", function (Admin $user) {
    //     return $user instanceof Admin;
    //     });


    /**
     * Register any authentication / authorization policies.
     */

    /**
     * Register any authentication / authorization policies.
     */

}
