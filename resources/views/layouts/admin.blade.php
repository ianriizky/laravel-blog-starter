@component('laravel-blog-starter::layouts.master')
    <div class="main-wrapper">
        <div class="navbar-bg"></div>

        @include('laravel-blog-starter::components.header')

        @include('laravel-blog-starter::components.sidebar')

        <div class="main-content">
            @includeWhen($alert = session('alert'), 'laravel-blog-starter::components.alert-dismissible', compact('alert'))

            @isset($slot)
                {{ $slot }}
            @endisset

            @hasSection ('content')
                @yield('content')
            @endif
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>

            <div class="footer-right">
                {{ config('app.name') }}
            </div>
        </footer>
    </div>
@endcomponent
