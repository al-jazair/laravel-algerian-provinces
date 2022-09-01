<?php

namespace ElaborateCode\AlgerianProvinces\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Wilaya extends Model
{
    use Sushi;

    public $timestamps = false;

    protected $fillable = [];

    public function getRows(): array
    {
        $rows = require __DIR__.'./../../arrays/wilayas.php';

        return $rows;
    }

    // protected function sushiShouldCache(): bool
    // {
    //     return true;
    // }
}
