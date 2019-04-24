<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\View\Factory as ViewFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ViewFactory::macro('component', function ($name, $data = []) {
            return View::make('app', ['name' => $name, 'data' => $data]);
        });
        ViewFactory::macro('admin_component', function ($name, $data = []) {
            return View::make('app_admin', ['name' => $name, 'data' => $data]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
