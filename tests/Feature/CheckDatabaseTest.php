<?php

use ElaborateCode\AlgerianProvinces\Models\Wilaya;

it('has 58 records', function () {
    // dump(Wilaya::all()->toArray());
    $this->assertDatabaseCount(config('algerian-provinces.table_name') ?? 'wilayas', 58);
});
