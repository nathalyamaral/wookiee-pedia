<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('layouts.app', 'appview');
        Blade::component('components.menu.header', 'header');
        Blade::component('components.index.films', 'films');
        Blade::component('components.index.details', 'details');
        Blade::component('components.index.principais', 'principais');
        Blade::component('components.footer', 'footer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function(){
            return new Client([
                'base_uri' => 'https://swapi.co/api/',
                'timeout'  => 5.0,
                'verify' => false,
            ]);
        });
    }
}
