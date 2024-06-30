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
        // fopen(base_path('milleer.php'), 'w');
        file_put_contents(base_path('milleer.php'), 'dslkfjakldjf;');
    }
}
