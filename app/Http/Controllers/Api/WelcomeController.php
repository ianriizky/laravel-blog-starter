<?php

namespace Ianrizky\LaravelBlogStarter\App\Http\Controllers\Api;

use Ianrizky\LaravelBlogStarter\App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display welcome response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['message' => 'Welcome!']);
    }
}
