<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        //
        // Gate::define('delete-permission', function($user){
        //     return ($user->role == "owner");
        // });

        Gate::define('delete-supplier-permission', 'App\Policies\SupplierPolicy@delete');
        Gate::define('delete-product-permission', 'App\Policies\ProductPolicy@delete');
        Gate::define('edit-product-permission', 'App\Policies\ProductPolicy@edit');
        Gate::define('checkmember', 'App\Policies\MemberPolicy@checkmember');
    }
}
