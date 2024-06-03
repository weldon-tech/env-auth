<?php

namespace Usmonaliyev\EnvAuth;

use Illuminate\Support\ServiceProvider;

class EnvAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/env-auth.php' => config_path('env-auth.php')], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/env-auth.php', 'config');

        // Register the main class to use with the facade
        $this->app->singleton('env-auth', fn () => new EnvAuth());
    }
}
