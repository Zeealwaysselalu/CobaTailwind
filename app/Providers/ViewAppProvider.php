<?php

namespace App\Providers;

use App\Models\InfoUser;
use Illuminate\Support\Facades\View;
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

        View::composer('user.profile', function ($view) {
            if (request()->route('slug')) {

                $view->with('infoprofil', InfoUser::where('slug', request()->route('slug'))->first());
            }
        });

        view()->composer('*', function ($view) {
            if (auth('web')->check()) {
                $view->with('dataprofil', auth('web')->user()->infoUser);
            }
        });
    }
}
