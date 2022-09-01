<?php

namespace ElaborateCode\AlgerianProvinces\Tests;

use ElaborateCode\AlgerianProvinces\Database\Seeders\WilayaSeeder;
use ElaborateCode\AlgerianProvinces\WilayaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // $this->seed(WilayaSeeder::class);
    }

    protected function getPackageProviders($app)
    {
        return [
            WilayaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
