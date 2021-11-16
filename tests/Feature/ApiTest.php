<?php

use Ianrizky\LaravelBlogStarter\App\Support\Config\Route;

it('has welcome response', function () {
    /** @var \Illuminate\Testing\TestResponse $response */
    $response = $this->getJson(route(Route::getApiName().'welcome'));

    $response
        ->assertOk()
        ->assertJson(['message' => 'Welcome!']);
});
