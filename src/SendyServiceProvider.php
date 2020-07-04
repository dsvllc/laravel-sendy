<?php

namespace Dsvllc\Sendy;

use Illuminate\Support\ServiceProvider;

/**
 * Class SendyServiceProvider
 *
 * @package Dsvllc\Sendy
 */
class SendyServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-sendy.php' => config_path('laravel-sendy.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-sendy.php', 'laravel-sendy');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['sendy'];
    }
}
