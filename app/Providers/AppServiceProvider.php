<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Gate::define('view-student', function (User $user) {
            return $user->role === 'admin' || $user->role === 'guest';
        });

        Gate::define('store-student', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('edit-student', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('destroy-student', function (User $user) {
            return $user->role === 'admin';
        });

    }
    
}
