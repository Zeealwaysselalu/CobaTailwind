<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewAppProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            if (auth('web')->check()) {
                $view->with('dataprofil', auth('web')->user()->infoUser);
            }
        });
    }
}
