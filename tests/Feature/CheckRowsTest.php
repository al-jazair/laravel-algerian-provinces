<?php

use ElaborateCode\AlgerianProvinces\Models\Wilaya;

it('has 58 records', function () {
    $this->assertEquals(58, Wilaya::count());
});

it('checks 31st wilaya fr_name', function () {
    $this->assertEquals('Oran', Wilaya::find(31)->fr_name);
});

it('checks 31st wilaya ar_name', function () {
    $this->assertEquals('وهران', Wilaya::find(31)->ar_name);
});
