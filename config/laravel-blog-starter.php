<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Prefix Configuration
    |--------------------------------------------------------------------------
    |
    | This option set the table prefix name on the database.
    | Note: Set to "null" to disable this configuration.
    |
    */

    'table_prefix' => '_blog_',

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    |
    | Here is where you can define the route configuration. Basically every
    | single name defined here is familiar with the Laravel configuration.
    |
    */

    'route' => [
        'api' => [
            'prefix' => '/blog/api',
            'middleware' => 'api',
        ],

        'dashboard' => [
            'prefix' => '/blog/dashboard',
            'middleware' => 'web',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Model Class Name
    |--------------------------------------------------------------------------
    |
    | This option determine the model class used on the application.
    |
    */

    'model' => [
        'category' => Ianrizky\LaravelBlogStarter\App\Models\Category::class,
        'tag' => Ianrizky\LaravelBlogStarter\App\Models\Tag::class,
        'taggable' => 'taggable',
        'article' => Ianrizky\LaravelBlogStarter\App\Models\Article::class,
    ],

];
