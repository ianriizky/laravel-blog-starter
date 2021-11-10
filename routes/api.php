<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LaravelBlogStarter API Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => config('laravel-blog-starter.prefix.route.api.prefix', '/blog/api'),
    'middleware' => config('laravel-blog-starter.prefix.route.api.middleware', 'api'),
], function () {
    Route::get('/welcome', function () {
        return response()->json(['message' => 'Welcome!']);
    });
});
