# Laravel Blog Starter

[![Build Status](https://github.com/ianriizky/laravel-blog-starter/workflows/tests/badge.svg)](https://github.com/ianriizky/laravel-blog-starter/actions)
[![StyleCI](https://github.styleci.io/repos/425769801/shield)](https://github.styleci.io/repos/425769801)
[![Total Downloads](https://poser.pugx.org/ianriizky/laravel-blog-starter/d/total.svg)](https://packagist.org/packages/ianriizky/laravel-blog-starter)
[![Latest Stable Version](https://poser.pugx.org/ianriizky/laravel-blog-starter/v/stable.svg)](https://packagist.org/packages/ianriizky/laravel-blog-starter)
[![License](https://poser.pugx.org/ianriizky/laravel-blog-starter/license.svg)](https://packagist.org/packages/ianriizky/laravel-blog-starter)


**laravel-blog-starter** is a starter kit to build blog application using Laravel Framework.

## Requirement
- Laravel Framework ^8.0
- PHP ^7.4|^8.0
- MySQL ^5.7

## Instalation
You can install the package via composer:

```bash
composer require ianriizky/laravel-blog-starter
```

After installation process finished, you are suggested to publish the configuration file:

```bash
php artisan vendor:publish --provider="Ianrizky\LaravelBlogStarter\App\Providers\ServiceProvider" --tag="config"
```

> Packagist: https://packagist.org/packages/ianriizky/laravel-blog-starter

## Preparing The Database
You need to publish the migration to create the required table:

```bash
php artisan vendor:publish --provider="Ianrizky\LaravelBlogStarter\App\Providers\ServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
```

After that, you need to run migrations.

```bash
php artisan migrate
```

## Testing
```bash
./vendor/bin/pest
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits
| Role | Name |
| ---- | ---- |
| Owner | [Septianata Rizky Pratama](https://github.com/ianriizky) |
