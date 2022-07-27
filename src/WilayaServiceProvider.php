<?php

namespace ElaborateCode\AlgerianProvinces;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WilayaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('algerian-provinces')
            ->hasConfigFile()
            ->hasMigration('create_wilayas_table');
    }
}
