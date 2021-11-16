<?php

namespace Ianrizky\LaravelBlogStarter\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    /**
     * {@inheritDoc}
     */
    protected function getPackageProviders($app)
    {
        $composerSchema = json_decode(file_get_contents(__DIR__.'/../composer.json'), true);

        return data_get($composerSchema, 'extra.laravel.providers', []);
    }

    /**
     * {@inheritDoc}
     */
    protected function getPackageAliases($app)
    {
        $composerSchema = json_decode(file_get_contents(__DIR__.'/../composer.json'), true);

        return data_get($composerSchema, 'extra.laravel.aliases', []);
    }

    /**
     * {@inheritDoc}
     */
    protected function getApplicationTimezone($app)
    {
        return 'Asia/Makassar';
    }

    /**
     * {@inheritDoc}
     */
    protected function defineEnvironment($app)
    {
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);

        $app['config']->set('database.default', 'sqlite');
    }
}
