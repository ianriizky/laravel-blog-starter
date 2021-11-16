<?php

use Ianrizky\LaravelBlogStarter\App\Http\Controllers\Api\WelcomeController;
use Ianrizky\LaravelBlogStarter\App\Support\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LaravelBlogStarter API Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => Config\Route::getApiPrefix(),
    'middleware' => Config\Route::getApiMiddleware(),
    'as' => Config\Route::getApiName(),
], function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
});
