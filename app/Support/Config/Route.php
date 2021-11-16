<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Config;

class Route
{
    /**
     * Default configuration value of "route.api.prefix".
     *
     * @var string
     */
    const DEFAULT_API_PREFIX = '/blog/api';

    /**
     * Default configuration value of "route.web.prefix".
     *
     * @var string
     */
    const DEFAULT_WEB_PREFIX = '/blog';

    /**
     * Default configuration value of "route.api.middleware".
     *
     * @var string|array
     */
    const DEFAULT_API_MIDDLEWARE = 'api';

    /**
     * Default configuration value of "route.web.middleware".
     *
     * @var string|array
     */
    const DEFAULT_WEB_MIDDLEWARE = 'web';

    /**
     * Default configuration value of "route.api.name".
     *
     * @var string
     */
    const DEFAULT_API_NAME = 'blog.api.';

    /**
     * Default configuration value of "route.web.name".
     *
     * @var string
     */
    const DEFAULT_WEB_NAME = 'blog.';

    /**
     * Get configuration value of "route.api.prefix".
     *
     * @return string
     */
    public static function getApiPrefix(): string
    {
        return config('laravel-blog-starter.route.api.prefix', static::DEFAULT_API_PREFIX);
    }

    /**
     * Get configuration value of "route.web.prefix".
     *
     * @return string
     */
    public static function getWebPrefix(): string
    {
        return config('laravel-blog-starter.route.web.prefix', static::DEFAULT_WEB_PREFIX);
    }

    /**
     * Get configuration value of "route.api.middleware".
     *
     * @return string|array
     */
    public static function getApiMiddleware()
    {
        return config('laravel-blog-starter.route.api.middleware', static::DEFAULT_API_MIDDLEWARE);
    }

    /**
     * Get configuration value of "route.web.middleware".
     *
     * @return string|array
     */
    public static function getWebMiddleware()
    {
        return config('laravel-blog-starter.route.web.middleware', static::DEFAULT_WEB_MIDDLEWARE);
    }

    /**
     * Get configuration value of "route.api.name".
     *
     * @return string
     */
    public static function getApiName(): string
    {
        return config('laravel-blog-starter.route.api.name', static::DEFAULT_API_NAME);
    }

    /**
     * Get configuration value of "route.web.name".
     *
     * @return string
     */
    public static function getWebName(): string
    {
        return config('laravel-blog-starter.route.web.name', static::DEFAULT_WEB_NAME);
    }
}
