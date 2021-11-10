<?php

namespace Ianrizky\LaravelBlogStarter\App\Providers;

use Illuminate\Contracts\Container\Container as ContainerContract;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/laravel-blog-starter.php' => $this->app->configPath('laravel-blog-starter.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-blog-starter');
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-blog-starter.php', 'laravel-blog-starter');

        // $this->app->bind(Manager::class, function (ContainerContract $app) {
        //     return new Manager($app);
        // });
    }
}
