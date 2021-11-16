<?php

namespace Ianrizky\LaravelBlogStarter\App\Support\Config;

use DomainException;
use Illuminate\Support\Str;

class Model
{
    /**
     * Default configuration value list of "model".
     *
     * @var array<string, string>
     */
    const DEFAULT_MODEL = [
        'category' => \Ianrizky\LaravelBlogStarter\App\Models\Category::class,
        'tag' => \Ianrizky\LaravelBlogStarter\App\Models\Tag::class,
        'article' => \Ianrizky\LaravelBlogStarter\App\Models\Article::class,
    ];

    /**
     * Default configuration value list of "table".
     *
     * @var array<string, string>
     */
    const DEFAULT_TABLE = [
        'taggable' => 'taggables',
    ];

    /**
     * Default configuration value of "table_prefix".
     *
     * @var string|null
     */
    const DEFAULT_TABLE_PREFIX = null;

    /**
     * Get full class name of the model based on the given key.
     *
     * @param  string  $model
     * @return string|null
     */
    public static function modelClassName(string $model): ?string
    {
        if (!$class = config('laravel-blog-starter.model.'.$model, static::DEFAULT_MODEL[$model] ?? null)) {
            throw new DomainException($model.' model class name is not provided by the Ianrizky\LaravelBlogStarter package');
        }

        return $class;
    }

    /**
     * Get table name based on the given key.
     *
     * @param  string  $table
     * @return string|null
     */
    public static function tableName(string $table): ?string
    {
        if (!$class = config('laravel-blog-starter.table.'.$table, static::DEFAULT_TABLE[$table] ?? null)) {
            throw new DomainException($table.' name is not provided by the Ianrizky\LaravelBlogStarter package');
        }

        return static::tablePrefix().$class;
    }

    /**
     * Get configuration value of "table_prefix".
     *
     * @return string
     */
    public static function tablePrefix(): ?string
    {
        return config('laravel-blog-starter.table_prefix', static::DEFAULT_TABLE_PREFIX);
    }
}
