<?php

namespace App\Providers;

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
        //Laravel 5.7.7 and earlier
        //\Schema::defaultStringLength(191);
        \Schema::defaultStringLength(255);
    }
}
