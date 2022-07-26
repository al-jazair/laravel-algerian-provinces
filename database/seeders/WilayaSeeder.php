<?php

namespace ElaborateCode\AlgerianStates\Database\Seeders;

use ElaborateCode\AlgerianStates\Enum\WilayaEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $wilayas = [];

        for ($i = 1; $i <= 58; $i++) {
            $id = "_$i";
            $wilayas[$i]['id'] = $i;
            // $wilayas[$i]['name'] = WilayaEnum::wilaya($i);
            $wilayas[$i]['name'] = constant(WilayaEnum::class."::$id")->wilaya();
        }

        DB::table('wilayas')->insert($wilayas);
    }
}
