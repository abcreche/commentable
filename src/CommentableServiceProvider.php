<?php

namespace Abcreche\Commentable;

use Illuminate\Support\ServiceProvider;

class CommentableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'commentable');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'commentable');
        //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $config = $this->app->config['commentable'];
        $this->app->bind(User::class, $config['user_model']);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('commentable.php'),
            ], 'config');

            $this->publishes([
            __DIR__ . '/../database/migrations/'
            => database_path('migrations/'),
        ], 'abcreche-commentable-migrations');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'commentable');

        // Register the main class to use with the facade
        $this->app->singleton('commentable', function () {
            return new Commentable;
        });
    }
}
