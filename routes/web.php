<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LaravelBlogStarter Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => config('laravel-blog-starter.prefix.route.web.prefix', '/blog/dashboard'),
    'middleware' => config('laravel-blog-starter.prefix.route.web.middleware', 'web'),
], function () {
    Route::get('/welcome', function () {
        echo 'Welcome!';
    });
});
