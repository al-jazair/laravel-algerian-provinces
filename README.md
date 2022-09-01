# Laravel Algerian provinces

![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/run-tests?label=Tests&style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)

![banner](https://banners.beyondco.de/Algerian%20provinces.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-provinces&pattern=architect&style=style_1&description=A+table+seeded+with+the+58+Algerian+provinces+for+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=database)

[Algerian provinces](wilayas.md) migration and seeder for Laravel applications

## Installation

Install the package via composer:

```bash
composer require medilies/laravel-algerian-provinces=v1.0.0
```

Publish the migration:

```bash
php artisan vendor:publish --tag="algerian-provinces-migrations"
```

You may need to rename the migration to something like `2014_10_12_200000_create_wilayas_table.php` to make it run automatically with the first migrations.

Run the migrations:

```bash
php artisan migrate
```

### Publishing config file [Optional]

You can publish the config file with:

```bash
php artisan vendor:publish --tag="algerian-provinces-config"
```

This is the contents of the published config file:

```php
return [
    'table_name' => null, // defaults to wilayas
    'columns_names' => [
        'wilaya_fr_name' => null, // defaults to fr_name
        'wilaya_ar_name' => null, // defaults to ar_name
    ],
];
```

That allows you to rename the `table` and `columns` names before running the migrations.

## Usage

### Seeding

After publishing and running the migrations, add the `ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder` to the called seeders list:

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder::class
        ]);
    }
}
```

Or call it directly from the command line:

```php
php .\artisan db:seed --class=ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder
```
### Model

```php
namespace ElaborateCode\AlgerianProvinces\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('algerian-provinces.table_name') ?? 'wilayas';
    }
}
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
