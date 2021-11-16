<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route(LaravelBlogStarterConfigRoute::getWebName().'dashboard') }}">{{ config('laravel-blog-starter.app_name') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route(LaravelBlogStarterConfigRoute::getWebName().'dashboard') }}">{{ config('laravel-blog-starter.app_shortname') }}</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Home') }}</li>

            <li @if (Route::is(LaravelBlogStarterConfigRoute::getWebName().'dashboard')) class="active" @endif>
                <a href="{{ route(LaravelBlogStarterConfigRoute::getWebName().'dashboard') }}" class="nav-link">
                    <i class="fa fa-fire"></i> <span>{{ __('Dashboard') }}</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
