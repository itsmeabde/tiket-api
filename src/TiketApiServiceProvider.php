<?php

namespace itsmeabde\TiketApi;

use Illuminate\Support\ServiceProvider;

class TiketApiServiceProvider extends ServiceProvider
{
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/tiket.php' => config_path('tiket.php')
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/Config/tiket.php', 'tiket.php');
        $this->app->singleton('tiketApi', function($app){
            return new TiketApi($app);
        });
    }

}