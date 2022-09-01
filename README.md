# Laravel Algerian provinces

![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/run-tests?label=Tests&style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)

![banner](https://banners.beyondco.de/Algerian%20provinces.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-provinces&pattern=architect&style=style_1&description=A+table+migration+seeded+with+the+58+Algerian+provinces+for+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=database)

[Algerian provinces](wilayas.md) migration and seeder for Laravel applications

## Installation

Install the package via composer:

```bash
composer require medilies/laravel-algerian-provinces
```

### Publishing config file [Optional]

You can publish the config file with:

```bash
php artisan vendor:publish --tag="algerian-provinces-config"
```

This is the contents of the published config file:

```php
return [
    'columns_names' => [
        'wilaya_fr_name' => null, // defaults to fr_name
        'wilaya_ar_name' => null, // defaults to ar_name
    ],
];
```

That allows you to rename `columns` names.

## Usage

Now you have access to the `ElaborateCode\AlgerianProvinces\Models\Wilaya`

## Testing

```bash
vendor/bin/pint
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
