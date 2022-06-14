
# Laravel Sendgrid Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/afatmustafa/laravel-sendgrid-api.svg?style=flat-square)](https://packagist.org/packages/afatmustafa/laravel-sendgrid-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/afatmustafa/laravel-sendgrid-api/run-tests?label=tests)](https://github.com/afatmustafa/laravel-sendgrid-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/afatmustafa/laravel-sendgrid-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/afatmustafa/laravel-sendgrid-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/afatmustafa/laravel-sendgrid-api.svg?style=flat-square)](https://packagist.org/packages/afatmustafa/laravel-sendgrid-api)

This package makes it easy to integrate Sendgrid with Laravel.

## Installation

You can install the package via composer:

```bash
composer require afatmustafa/laravel-sendgrid-api
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-sendgrid-api-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-sendgrid-api-views"
```

## Usage

```php
$laravelSendgridApi = new Afatmustafa\LaravelSendgridApi();
echo $laravelSendgridApi->echoPhrase('Hello, Afatmustafa!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mustafa Afat](https://github.com/afatmustafa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
