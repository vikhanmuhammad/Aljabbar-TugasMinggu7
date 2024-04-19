<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\bergabungModel;

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
    public function boot()
    {
        // View Composer untuk sidebar
        View::composer(['partials.admin.sidebar'], function ($view) {
            $dataAdmin = bergabungModel::first();
            $view->with('dataAdmin', $dataAdmin);
        });

        // View Share untuk menyebarkan $dataAdmin ke semua view
        View::share('dataAdmin', bergabungModel::first());
    }
}
