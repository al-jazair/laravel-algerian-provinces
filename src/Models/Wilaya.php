<?php

namespace ElaborateCode\AlgerianProvinces\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = config('algerian-provinces.table_name') ?? 'wilayas';
    }
}
