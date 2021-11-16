<?php

use Ianrizky\LaravelBlogStarter\App\Http\Controllers\Web\DashboardController;
use Ianrizky\LaravelBlogStarter\App\Support\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LaravelBlogStarter Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => Config\Route::getWebPrefix(),
    'middleware' => Config\Route::getWebMiddleware(),
    'as' => Config\Route::getWebName(),
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
