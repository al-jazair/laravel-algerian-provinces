# Laravel Algerian provinces

![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-provinces?style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/run-tests?label=Tests&style=for-the-badge)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-provinces/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)

![banner](https://banners.beyondco.de/Algerian%20provinces.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-provinces&pattern=architect&style=style_1&description=Add+Algerian+provinces+table+to+Laravel&md=1&showWatermark=0&fontSize=100px&images=database)

Algerian provinces migration and seeder for Laravel applications

## Installation

Install the package via composer:

```bash
composer require medilies/laravel-algerian-provinces
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
    'column_name' => [
        'wilaya_fr_name' => null, // defaults to fr_name
        'wilaya_ar_name' => null, // defaults to ar_name
    ],
];
```

That allows you to rename the `table` and `columns` names before running the migrations.

## Usage

After publishing and running the migrations, add the `ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder` to the called seeders list or call it directly from the command line.  

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
            ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder::class
        ]);
    }
}
```

```php
php .\artisan db:seed --class=ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder
```

|  Code  |  Province          |  Arabic name     |
|--------|--------------------|------------------|
| 01     | Adrar              |  أدرار           |
| 02     | Chlef              |  الشلف           |
| 03     | Laghouat           |  الأغواط         |
| 04     | Oum El Bouaghi     |  أم البواقي      |
| 05     | Batna              |  باتنة           |
| 06     | Béjaïa             |  بجاية           |
| 07     | Biskra             |  بسكرة           |
| 08     | Béchar             |  بشار            |
| 09     | Blida              |  البليدة         |
| 10     | Bouïra             |  البويرة         |
| 11     | Tamanrasset        |  تمنراست         |
| 12     | Tébessa            |  تبسة            |
| 13     | Tlemcen            |  تلمسان          |
| 14     | Tiaret             |  تيارت           |
| 15     | Tizi Ouzou         |  تيزي وزو        |
| 16     | Algiers            |  الجزائر         |
| 17     | Djelfa             |  الجلفة          |
| 18     | Jijel              |  جيجل            |
| 19     | Sétif              |  سطيف            |
| 20     | Saïda              |  سعيدة           |
| 21     | Skikda             |  سكيكدة          |
| 22     | Sidi Bel Abbès     |  سيدي بلعباس     |
| 23     | Annaba             |  عنابة           |
| 24     | Guelma             |  قالمة           |
| 25     | Constantine        |  قسنطينة         |
| 26     | Médéa              |  المدية          |
| 27     | Mostaganem         |  مستغانم         |
| 28     | M'Sila             |  المسيلة         |
| 29     | Mascara            |  معسكر           |
| 30     | Ouargla            |  ورقلة           |
| 31     | Oran               |  وهران           |
| 32     | El Bayadh          |  البيض           |
| 33     | Illizi             |  اليزي           |
| 34     | Bordj Bou Arréridj |  برج بوعريريج    |
| 35     | Boumerdès          |  بومرداس         |
| 36     | El Tarf            |  الطارف          |
| 37     | Tindouf            |  تندوف           |
| 38     | Tissemsilt         |  تسمسيلت         |
| 39     | El Oued            |  الوادي          |
| 40     | Khenchela          |  خنشلة           |
| 41     | Souk Ahras         |  سوق أهراس       |
| 42     | Tipaza             |  تيبازة          |
| 43     | Mila               |  ميلة            |
| 44     | Aïn Defla          |  عين الدفلى      |
| 45     | Naâma              |  النعامة         |
| 46     | Aïn Témouchent     |  عين تموشنت      |
| 47     | Ghardaïa           |  غرداية          |
| 48     | Relizane           |  غليزان          |
| 49     | El M'Ghair         |  المغير          |
| 50     | El Menia           |  المنيعة         |
| 51     | Ouled Djellal      |  أولاد جلال      |
| 52     | Bordj Baji Mokhtar |  برج باجي مختار  |
| 53     | Béni Abbès         |  بني عباس        |
| 54     | Timimoun           |  تيميمون         |
| 55     | Touggourt          |  تقرت            |
| 56     | Djanet             |  جانت            |
| 57     | In Salah           |  عين صالح        |
| 58     | In Guezzam         |  عين قزّام       |

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
