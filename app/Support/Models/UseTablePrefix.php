<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Models;

/**
 * Implement table_prefix configuration from config/laravel-blog-starter.php
 */
trait UseTablePrefix
{
    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        $this->setTableNamePrefix();

        parent::__construct($attributes);
    }

    /**
     * Set table prefix name using laravel-blog-starter configuration.
     *
     * @param  string|null  $default
     * @return void
     */
    protected function setTableNamePrefix(string $default = null)
    {
        $this->table = config('laravel-blog-starter.table_prefix', $default) . $this->getTable();
    }
}
