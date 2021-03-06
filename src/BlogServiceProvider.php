<?php

namespace Thinhpd\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'thinhpd');
//         $this->loadViewsFrom(__DIR__.'/../resources/views', 'thinhpd');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
//         $this->loadRoutesFrom(__DIR__.'/routes/custom.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blog.php', 'blog');

        // Register the service the package provides.
        $this->app->singleton('blog', function ($app) {
            return new Blog;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['blog'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/blog.php' => config_path('blog.php'),
        ], 'blog.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../src/App' => base_path('app/'),
        ], 'blog.app');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../src/database' => database_path(),
        ], 'blog.database');

//        $this->publishes([
//            __DIR__.'/../src/resources/views' => resource_path('views/vendor/backpack/base/inc'),
//        ], 'blog.views');

        // Publishing the translation files.
        $this->publishes([
            __DIR__.'/../src/resources/lang' => resource_path('lang/'),
        ], 'blog.lang');

        // Registering package commands.

    }
}
