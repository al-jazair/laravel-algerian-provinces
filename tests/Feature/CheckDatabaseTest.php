<?php

use ElaborateCode\AlgerianProvinces\Models\Wilaya;

it('has 58 records', function () {
    $this->assertEquals('Oran', Wilaya::find(31)->fr_name);

    $this->assertEquals(58, Wilaya::count());
});
