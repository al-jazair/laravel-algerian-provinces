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

    public static function arr()
    {
        return self::all()->toArray();
    }

    public static function frNames()
    {
        return self::pluck(config('algerian-provinces.columns_names.wilaya_fr_name') ?? 'fr_name');
    }

    public static function arNames()
    {
        return self::pluck(config('algerian-provinces.columns_names.wilaya_fr_name') ?? 'ar_name');
    }

    // protected function sushiShouldCache(): bool
    // {
    //     return true;
    // }
}
