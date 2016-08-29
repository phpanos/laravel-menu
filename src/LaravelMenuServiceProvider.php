<?php

namespace Phpanos\LaravelMenu;

use Illuminate\Support\ServiceProvider;

class LaravelMenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        #require __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Phpanos\LaravelMenu\Menu');
    }
}
