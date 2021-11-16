<?php

use Ianrizky\LaravelBlogStarter\App\Support\Config\Route;

it('has dashboard page', function () {
    /** @var \Illuminate\Testing\TestResponse $response */
    $response = $this->get(route(Route::getWebName().'dashboard'));

    $response
        ->assertOk()
        ->assertViewIs('laravel-blog-starter::dashboard');
});
