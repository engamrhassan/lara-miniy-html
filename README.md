# Laravel HTML Minifier

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mmnow/laravel-html-minify.svg?style=flat-square)](https://packagist.org/packages/mmnow/laravel-html-minify)
[![Build Status](https://img.shields.io/travis/mmnow/laravel-html-minify/master.svg?style=flat-square)](https://travis-ci.org/mmnow/laravel-html-minify)
[![Quality Score](https://img.shields.io/scrutinizer/g/mmnow/laravel-html-minify.svg?style=flat-square)](https://scrutinizer-ci.com/g/mmnow/laravel-html-minify)
[![Total Downloads](https://img.shields.io/packagist/dt/mmnow/laravel-html-minify.svg?style=flat-square)](https://packagist.org/packages/mmnow/laravel-html-minify)

This package helps to minify your project`s html (blade file) output.

### Requirements

| Laravel                        |                   Package |
|--------------------------------|--------------------------:|
| 5.x to 9.x                     |                       2.x |
| 10.0 to 11.x                   |                       3.x |

## Installation

You can install the package via composer:

```bash
composer require mmnow/laravel-html-minify
```

## Sponsor Laravel HTML Minifier on GitHub

[Become a sponsor to Dipesh Sukhia
](https://github.com/sponsors/mmnow).

## Usage

``` php
php artisan vendor:publish --tag=LaravelHtmlMinify


you should add middleware to your web middleware group within your app/Http/Kernel.php file:
use mmnow\LaravelHtmlMinify\Middleware\LaravelMinifyHtml;
LaravelMinifyHtml::class

add in env
for enable
HTML_MINIFY = true
for disable
HTML_MINIFY = false

exclude route name for exclude from minify
'exclude_route' => [
        // 'routeName'
]

for particular html part 
LaravelHtmlMinifyFacade::htmlMinify("<div>...</div>");
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dipesh.sukhia@gmail.com instead of using the issue tracker.

## Credits

- [Dipesh Sukhia](https://github.com/mmnow)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

