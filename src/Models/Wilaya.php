<?php

namespace ElaborateCode\AlgerianProvinces\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use \Sushi\Sushi;

    protected $fillable = [];

    protected $rows = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->rows = require __DIR__ . './../../arrays/wilayas.php';
    }
}
