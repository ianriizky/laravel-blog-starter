<?php

namespace Ianrizky\LaravelBlogStarter\App\Http\Controllers\Web;

use Ianrizky\LaravelBlogStarter\App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('laravel-blog-starter::dashboard');
    }
}
