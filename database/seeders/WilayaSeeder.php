<?php

namespace ElaborateCode\AlgerianProvinces\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $wilayas = require __DIR__.'./../../arrays/wilayas.php';

        DB::table('wilayas')->insert($wilayas);
    }
}
