<?php

namespace Ianrizky\LaravelBlogStarter\App\Providers;

use Illuminate\Contracts\Container\Container as ContainerContract;
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
            __DIR__.'/../../config/laravel-blog-starter.php' => $this->app->configPath('laravel-blog-starter.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../../database/migrations/001_create_categories_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_categories_table.php'),
            __DIR__.'/../../database/migrations/002_create_tags_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time() + 1).'_create_tags_table.php'),
            __DIR__.'/../../database/migrations/003_create_taggables_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time() + 2).'_create_taggables_table.php'),
            __DIR__.'/../../database/migrations/004_create_articles_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time() + 3).'_create_articles_table.php'),
        ], 'migrations');

        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-blog-starter');
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/laravel-blog-starter.php', 'laravel-blog-starter');

        // $this->app->bind(Manager::class, function (ContainerContract $app) {
        //     return new Manager($app);
        // });
    }
}
