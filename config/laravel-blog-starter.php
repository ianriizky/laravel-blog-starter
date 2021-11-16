<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application comes from Laravel Framework.
    |
    */

    'app_name' => env('APP_NAME', 'Blog Starter'),

    'app_shortname' => env('APP_SHORTNAME', 'BS'),

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
            'prefix' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_API_PREFIX,
            'middleware' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_API_MIDDLEWARE,
            'as' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_API_NAME,
        ],

        'web' => [
            'prefix' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_WEB_PREFIX,
            'middleware' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_WEB_MIDDLEWARE,
            'as' => Ianrizky\LaravelBlogStarter\App\Support\Config\Route::DEFAULT_WEB_NAME,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Model Class & Table Name
    |--------------------------------------------------------------------------
    |
    | This option determine the model class and table name used on the application.
    |
    */

    'model' => Ianrizky\LaravelBlogStarter\App\Support\Config\Model::DEFAULT_MODEL,

    'table' => Ianrizky\LaravelBlogStarter\App\Support\Config\Model::DEFAULT_TABLE,

    /*
    |--------------------------------------------------------------------------
    | Table Prefix Configuration
    |--------------------------------------------------------------------------
    |
    | This option set the table prefix name on the database.
    | Note: Set to "null" to disable this configuration.
    |
    */

    'table_prefix' => Ianrizky\LaravelBlogStarter\App\Support\Config\Model::DEFAULT_TABLE_PREFIX,

];
