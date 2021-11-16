@extends('laravel-blog-starter::layouts.admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Dashboard') }}</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <span>{{ __('Home') }}</span>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route(LaravelBlogStarterConfigRoute::getWebName().'dashboard') }}">
                        <i class="fas fa-fire"></i> <span>{{ __('Dashboard') }}</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <p>{{ __('Welcome to the blog dashboard!') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
