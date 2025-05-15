<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

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
        $this->registerPolicies();
        // Register Passport routes if needed, according to your Laravel/Passport version.
        // For Laravel Passport >= 11, routes are registered automatically.
        // If you need to customize, refer to the official documentation.
    }
}
