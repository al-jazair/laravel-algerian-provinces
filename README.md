# Laravel Algerian states

![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-states?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-states?style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-states/run-tests?label=Tests&style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-states/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)

https://banners.beyondco.de/Algerian%20states.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-states&pattern=architect&style=style_1&description=Add+Algerian+states+table+to+Laravel&md=1&showWatermark=0&fontSize=100px&images=database

Algerian states migration and seeder for Laravel applications

## Installation

Install the package via composer:

```bash
composer require medilies/laravel-algerian-states
```

Publish and run the migrations with:

```bash
php artisan vendor:publish --tag="algerian-states-migrations"
php artisan migrate
```

You can publish the config file with:

### Publishing config file [Optional]

You can publish the config file with:

```bash
php artisan vendor:publish --tag="algerian-states-config"
```

This is the contents of the published config file:

```php
return [
];
```

That allows you to rename the `table` before running the migrations.

## Usage

After publishing and running the migrations, add the `ElaborateCode\AlgerianStates\Database\Seeders\WilayaSeeder` to the called seeders list or call it directly from the command line.  

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ElaborateCode\AlgerianStates\Database\Seeders\WilayaSeeder::class
        ]);

}
```

```php
php .\artisan db:seed --class=ElaborateCode\AlgerianStates\Database\Seeders\WilayaSeeder
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/medilies/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [medilies](https://github.com/medilies)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
