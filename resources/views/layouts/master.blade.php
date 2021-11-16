<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') &mdash; @endif{{ config('app.name', 'Laravel') }}</title>

    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{ asset('vendor/laravel-blog-starter/css/stisla/master.css') }}">
    <link rel="icon" href="{{ asset('img/logo.jpeg') }}">

    {{-- Template CSS --}}
    @yield('pre-style')
    <link rel="stylesheet" href="{{ asset('vendor/laravel-blog-starter/css/stisla/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-blog-starter/css/stisla/components.css') }}">
    @yield('style')
    @stack('styles')
</head>

<body>
    <main id="app">
        @isset($slot)
            {{ $slot }}
        @endisset

        @hasSection ('content')
            @yield('content')
        @endif
    </main>

    {{-- Script --}}
    <script src="{{ asset('vendor/laravel-blog-starter/js/stisla/master.js') }}"></script>
    <script src="{{ asset('vendor/laravel-blog-starter/js/stisla/app.js') }}"></script>
    <script src="{{ asset('vendor/laravel-blog-starter/js/stisla/scripts.js') }}"></script>
    @yield('script')
    @stack('scripts')
</body>
