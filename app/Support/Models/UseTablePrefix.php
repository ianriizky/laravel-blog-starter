<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Models;

use Ianrizky\LaravelBlogStarter\App\Support\Config;

/**
 * Implement table_prefix configuration from config/laravel-blog-starter.php.
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
     * @return void
     */
    protected function setTableNamePrefix()
    {
        $this->table = Config\Model::tablePrefix().$this->getTable();
    }
}
